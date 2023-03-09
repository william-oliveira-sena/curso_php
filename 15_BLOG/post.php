<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];

        $correntPost;

        foreach($posts as $post){

            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>

            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">

            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro minima quas incidunt consectetur dolor saepe ad, eveniet reiciendis nobis, vitae libero quos veniam pariatur amet sint nulla quod velit nemo.
            Veniam beatae ab doloribus ipsa impedit, hic neque voluptate minima rem ullam accusantium a debitis dolore praesentium quisquam iste, maiores aliquam et suscipit? Voluptatem inventore animi molestiae numquam minus aliquid.
            Accusantium praesentium eum, necessitatibus cum quos nobis quo vel! Ea, ab dignissimos! Nihil excepturi modi quisquam, provident molestias delectus veritatis doloribus expedita saepe quae similique placeat vero id totam dolorem?
            Laborum inventore, quae sed nam qui vero expedita voluptas. Quas molestias repudiandae iure dolorum qui dolorem enim veniam velit obcaecati culpa corporis ipsum nihil et praesentium totam, quia architecto voluptates?
            Facere laudantium ex harum aliquid porro, perferendis, sint, nulla illum est praesentium sed dignissimos suscipit quos placeat. Harum, labore obcaecati! Omnis corporis aut ut. Dicta nam nulla voluptatum explicabo expedita? </p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro minima quas incidunt consectetur dolor saepe ad, eveniet reiciendis nobis, vitae libero quos veniam pariatur amet sint nulla quod velit nemo.
            Veniam beatae ab doloribus ipsa impedit, hic neque voluptate minima rem ullam accusantium a debitis dolore praesentium quisquam iste, maiores aliquam et suscipit? Voluptatem inventore animi molestiae numquam minus aliquid.
            Accusantium praesentium eum, necessitatibus cum quos nobis quo vel! Ea, ab dignissimos! Nihil excepturi modi quisquam, provident molestias delectus veritatis doloribus expedita saepe quae similique placeat vero id totam dolorem?
            Laborum inventore, quae sed nam qui vero expedita voluptas. Quas molestias repudiandae iure dolorum qui dolorem enim veniam velit obcaecati culpa corporis ipsum nihil et praesentium totam, quia architecto voluptates?
            Facere laudantium ex harum aliquid porro, perferendis, sint, nulla illum est praesentium sed dignissimos suscipit quos placeat. Harum, labore obcaecati! Omnis corporis aut ut. Dicta nam nulla voluptatum explicabo expedita? </p>
        </div>
        <aside id="idnav-container">
        <h3 id="tags-title"> Tags</h3>
      <ul id="tags-list">
         <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
      </ul>
        <h3 id="categories-title">categorias</h3>
        <ul id="categories-list">
             <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
        </ul>
    </aside>
    </main>
  
<?php
    include_once("templates/footer.php");
?>