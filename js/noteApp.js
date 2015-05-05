'use strict';

var app = angular
        .module('noteApp', ['ngSanitize'
        ]);

//controller
app.controller('noteCtrl', function ($scope, noteService) {
    
    $scope.getAllNotes = function(){
            noteService.getAllNotes().then(function(data){
            $scope.notes = data.data;
             console.log($scope.notes);
        });
    };
    $scope.getAllNotes();
     
    
    $scope.deleteNote = function(id){
        noteService.deleteNote(id).then(function(data){
            //console.log(data.data.msg);
            $scope.getAllNotes();
        });
    };
    
    //open edit modal
    $scope.openModal = function(selectedNote){
         $('#editModal').openModal();
        //make a copy of selectedNote in case it is unsaved
        $scope.shadow = angular.copy(selectedNote);
        $scope.selectedNote = selectedNote;
       
    };
    //close edit modal
    $scope.closeModal = function(){
        $('#editModal').closeModal();
        //reset note      
        //$scope.selectedNote = angular.copy($scope.shadow); not working?
        angular.copy($scope.shadow, $scope.selectedNote);
        
    };;
    
    //add a new note
    //get note object from ng-model 'note' from add-note form
    $scope.addNote = function(){
        //make use of $scope.note from the form
        //$scope.note is an object
        //need to turn $scope.note into json string
        var json = JSON.stringify( $scope.note );
        console.log(json);
        
        noteService.addNote(json).then(function(httpResponse){
            console.log(httpResponse.data);
           $scope.getAllNotes();
        });
    };
    
    //update note
    $scope.updateNote = function(){
        var json = JSON.stringify( $scope.selectedNote );
        console.log('update data');
        console.log(json);
        noteService.updateNote(json).then(function(httpResponse){
            console.log(httpResponse.data);
           $scope.getAllNotes();
        });
    };
});



//service
app.factory('noteService', function($http) {
    var url = 'classes/api.php?';
    var noteService = {
        getAllNotes: function(){
            //return a promise
            return $http.get(url + 'q=getAllNotes');
        },
        deleteNote : function(id){
            return $http.delete(url + 'q=' + id);
        },
        addNote : function(json){
            return $http.post(url, json);
        },
        updateNote: function(json){
            return $http.put(url, json);
        }
        
    };
    
    return noteService;
  });
  
//filters
//custom filter to truncate long text
app.filter('categoryFilter', function () {
    return function (input) {
      var category = {
        life : 'blue-grey darken-1',
        todolist : 'red lighten-2',
        work: 'amber lighten-1'
      };
      return category[input];
    };
});