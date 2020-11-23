<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kalyan
 */

get_header();
?>

	 <main class="main">
         <section id="contacts" class="section gradient">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <h2 class="h2">
                             Ошибка 404 - страница не найдена!
                         </h2>
                         <div class="contacts_information_value" style="margin-bottom: 10px">
                             Запрашиваемая Вами страница не найдена.
                         </div>
                         <div class="contacts_information_value">
                             Проверьте правильность написания URL-адреса или вернитесь на <a href="/" style="color: #F78012;">главную страницу сайта.</a>
                         </div>
                     </div>
                 </div>

             </div>
         </section>
     </main>
    <style>

    </style>
<?php
get_footer();
