/*
Navicat SQLite Data Transfer

Source Server         : note-taking-app
Source Server Version : 30808
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30808
File Encoding         : 65001

Date: 2015-05-04 01:32:32
*/

PRAGMA foreign_keys = OFF;

-- ----------------------------
-- Table structure for notes
-- ----------------------------
DROP TABLE IF EXISTS "main"."notes";
CREATE TABLE "notes" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"title"  TEXT(40),
"content"  TEXT(200),
"category"  TEXT,
"created_at"  INTEGER,
"modified_at"  INTEGER
);

-- ----------------------------
-- Records of notes
-- ----------------------------
INSERT INTO "main"."notes" VALUES (1, 'Reading Book', 'Advanced OOP PHP and Database', 'work', null, null);
INSERT INTO "main"."notes" VALUES (2, 'Shopping', 'Tomato, Apples', 'todolist', null, null);
INSERT INTO "main"."notes" VALUES (3, 'Portfolio project', 'working on a project', 'life', null, null);
INSERT INTO "main"."notes" VALUES (4, 'Test', 'test add or delete', 'life', null, null);
INSERT INTO "main"."notes" VALUES (5, 'Test2', 'test add or delete', 'life', null, null);
