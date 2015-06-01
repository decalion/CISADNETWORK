<?php

    class User {
        
        private $idusers;
        private $username;
        private $password;
        private $name;
        private $lastname;
        private $email;
        private $imageurl;
        private $idroles;
        private $activemail;
        private $active;
        private $userKey;
        private $privacity;
        
        private $friends;
        
        function __construct($idusers, $username, $password, $name, $lastname, $email, $imageurl, $idroles, $activemail, $active, $userKey, $privacity) {
            $this->idusers = $idusers;
            $this->username = $username;
            $this->password = $password;
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->imageurl = $imageurl;
            $this->idroles = $idroles;
            $this->activemail = $activemail;
            $this->active = $active;
            $this->userKey = $userKey;
            $this->privacity = $privacity;
        }
        
        public function show() {
            echo '<h1>'.$this->username.'</h1>';
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->lastname.'</h1>';
            echo '<h1>'.$this->email.'</h1>';
            echo '<img src="./images/'.$this->imageurl.'" />';
        }
        
        public function getIdusers() {
            return $this->idusers;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getName() {
            return $this->name;
        }

        public function getLastname() {
            return $this->lastname;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getImageurl() {
            return $this->imageurl;
        }

        public function getIdroles() {
            return $this->idroles;
        }

        public function getActivemail() {
            return $this->activemail;
        }

        public function getActive() {
            return $this->active;
        }

        public function getUserKey() {
            return $this->userKey;
        }
        
        public function getPrivacity() {
            return $this->privacity;
        }
        
        function getFriends() {
            return $this->friends;
        }

        public function setIdusers($idusers) {
            $this->idusers = $idusers;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setLastname($lastname) {
            $this->lastname = $lastname;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setImageurl($imageurl) {
            $this->imageurl = $imageurl;
        }

        public function setIdroles($idroles) {
            $this->idroles = $idroles;
        }

        public function setActivemail($activemail) {
            $this->activemail = $activemail;
        }

        public function setActive($active) {
            $this->active = $active;
        }

        public function setUserKey($userKey) {
            $this->userKey = $userKey;
        }
        
        public function setPrivacity($privacity) {
            $this->privacity = $privacity;
        }
        
        function loadInfo($link) {
            $this->setFriends($link);
        }
        
        function setFriends($link) {
            $query = 'select idusersfriends from friends inner join users on friends.idusers = users.idusers where friends.idusers = '.$this->idusers.';';
            $friends = $link->query($query);
            if ($friends->num_rows > 0) {
                foreach ($friends as $friend) {
                    $query2 = 'select username from users where idusers = '.$friend['idusersfriends'].';';
                    $username = $link->query($query2);
                    foreach ($username as $value) {
                        $this->friends[] = array('idusers' => $friend['idusersfriends'], 'username' => $value['username']);
                    }
                }
            } else {
                $this->friends = "You don't have any friend!";
            }
        }

        function isFriend($link, $idFriend) {
            $query = 'select * from friends where idusers = '.$idFriend.' and idusersfriends = '.$this->idusers.';';
            $result = $link->query($query);
            if ($result->num_rows > 0) {
                return true;
            }
            return false;
        }

    }

?>