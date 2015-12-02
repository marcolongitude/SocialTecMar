<?php
    echo '<ul class="pagination pagination-sm">';
    if ( $cur_page > 1 ) {
        $page_links = '<li><a href="' . $_SERVER['PHP_SELF'] . '?page=ViewPessoa&pagi=' . ( $cur_page - 1 ) . '">Anterior</a></li>';
    }else {
        $page_links = '<li><a class="disabled">Primeira</a></li>';
    }

    for ($i = 1; $i <= $num_pages; $i++){    
        if ($cur_page == $i){
            $page_links .= ' ' . '<li class="active"><a class="disabled">' . $i . '</a></li>'; 
        }elseif($i < 8 ){
            $page_links .= '<li><a href="' . $_SERVER['PHP_SELF'] . '?page=ViewPessoa&pagi=' . $i .'"> ' . $i . '</a></li>' ;
        }        
    }

    if ( $cur_page < $num_pages ){
        $page_links .= '<li><a href="' . $_SERVER['PHP_SELF'] . '?page=ViewPessoa&pagi=' . ( $cur_page + 1 ) . '">Próxima</a></li>';
    }else {
        $page_links .= '<li><a>Última</a></li>';
    }
    
    echo $page_links."</ul>";
?>