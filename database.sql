-- SQLBook: Code
-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Octobre 2017 à 13:53
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `fly` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `provenance` VARCHAR(66) NOT NULL,
  `arrivee` VARCHAR(66) NOT NULL,
  `depart` DATE NOT NULL,
  `retour` DATE NOT NULL,
  `prix` INT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
