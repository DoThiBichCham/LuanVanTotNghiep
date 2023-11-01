<?php 
    class Author extends Controller{
        public $author;
        public function __construct(){
            $this->author = $this->model('AuthorModel');
        }

        public function index(){
            $list_author = json_decode($this->author->getList());
            $this->view('backend/layout/master',[
                'page'          => 'backend/Author/index',
                'list_author' => $list_author,
                // 'total_page_number' => $total_page_number,
                // 'page_index'    => $page_index
            ]);
        }
    }
?>