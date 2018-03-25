<?php
    class Category_model extends AIMS_Model {
        protected  $table="est_category";
        protected  $pk_id="est_category_id";

        function __construct() {
            parent::__construct();
        }
    }
?>