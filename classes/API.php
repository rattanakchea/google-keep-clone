<?php

/**
 * API for note-taking application provide abstract interface to interact with database
 * return json data
 *
 * @author rattanak
 * 5/3/2015
 */
/**
 * Routes
  GET: api.php/?q=getAllNotes       return all notes
  GET: api.php/?q=id              return specified note
  DELETE api.php/?q=id            return specified note
  POST  api.php/
  PUT   api.php/?q=id
 */
require_once 'note.php';

class API {

    protected $request; //the path, for example api/notes
    protected $query; //what request want
    // response
    protected $data = array();
    protected $note;  //for query notes table

    public function __construct() {
        $this->note = new Note();
    }

    public function processApi() {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        switch ($method) {
            case 'get' :
                $this->processGetRequest();
                break;
            case 'post':
                $this->processPostRequest();
                break;

            case 'delete':
                $this->processDeleteRequest();
                break;
            
            case 'put':
                $this->processPutRequest();
                break;

            default:
                http_response_code(405);
        }
    }
     //helper function for PUT requests
    private function processPutRequest() {
         $json = file_get_contents('php://input');
        $data = json_decode($json, true);
         $data['content'] = nl2br($data['content']);
         
        $result = $this->note->updateNote($data);
        if ($result > 0 ) {
            $code = '200'; //sucessfuly added note
            $this->data['msg'] = 'Successfully add a note';
        } else {
            $code = '400';
            $this->data['error'] = 'Cannot add a note';
        }
        $this->sendJsonResponse($this->data, $code);
    }
    
    //helper function for POST requests
    private function processPostRequest() {
        //read input
       $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $data['content'] = nl2br($data['content']);
        //validate content of data
//        $data['title'] = 'new note';
//        $data['content'] = 'some content';
//        $data['category'] = 'work';
//        
        $result = $this->note->addNote($data);
        if ($result > 0 ) {
            $code = '200'; //sucessfuly added note
            $this->data['msg'] = 'Successfully add a note';
        } else {
            $code = '400';
            $this->data['error'] = 'Cannot add a note';
        }
        $this->sendJsonResponse($this->data, $code);
    }

    //helper function to process all get requests
    private function processGetRequest() {
        if (isset($_GET['q'])) {
            $query = $_GET['q'];
            $code = '200';
            if ($query == 'getAllNotes') {
                $this->data = $this->note->getAllNotes();
            } else if (is_int(intval($query))) {
                $this->data = $this->note->getNote($query);
                //check size of data array
                if (count($this->data) < 1) {
                    $this->data['msg'] = 'cannot find specified note with this id';
                    $code = '400';
                }
            }
        } else {
            $this->data['msg'] = 'error';
            $code = '400';
        }
        //send data when complete
        $this->sendJsonResponse($this->data, $code);
    }

    //helper function to process all get requests
    private function processDeleteRequest() {
        if (isset($_GET['q'])) {
            $query = $_GET['q'];
            if (is_int(intval($query))) {
                $count = $this->note->deleteNote($query);
//                //check size of data array
                if ($count < 1) {
                    $this->data['msg'] = 'cannot delete note with this id';
                    $code = '400';
                } else {
                    $this->data['msg'] = 'success delete';
                    $code = '200';
                }
            }
        }
         $this->sendJsonResponse($this->data, $code);
    }

    //send json encode data
    private function sendJsonResponse($data, $code) {
        //code 200 success
        //400: request could not be fulfilled due to bad syntax
        //404: request resource could not be found
        //
        header('Content-Type: application/json');
        http_response_code($code);
        echo json_encode($data);
    }

}

$api = new API();
$api->processApi();
