<?php
    include_once("templates/header.php");

    // Checa se veio algo no get
    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

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
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, odit eius inventore magnam eum blanditiis delectus, velit corporis labore, ut quae omnis facilis neque! Vero deserunt soluta commodi? Expedita, dolorum?
        Veritatis aperiam nobis sunt, itaque odit voluptate numquam sit rerum deleniti in quae voluptatibus pariatur ipsam eligendi qui, ut praesentium eum, sed rem facere nemo quis id voluptatum eaque! Nam?
        Nisi id atque sequi nemo veritatis mollitia quam nostrum nobis iure. Deserunt voluptates aliquid, architecto sit inventore nemo ex assumenda minus, veniam beatae dicta eum quibusdam iure quos quo optio.
        Magnam reiciendis, ipsa nam repellendus veniam recusandae, saepe unde eum qui possimus voluptatum sint minus nemo! Reiciendis nihil, unde explicabo perspiciatis eius voluptatum sunt, nesciunt cum in totam voluptatibus tempora?
        Iure et amet quos quae dolorum dicta dolore, nesciunt nihil repudiandae enim, dolorem in nobis consequatur eligendi quam, nam ipsa doloremque accusamus atque cumque maxime! Repellat iure nihil natus doloribus?</p>

        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, odit eius inventore magnam eum blanditiis delectus, velit corporis labore, ut quae omnis facilis neque! Vero deserunt soluta commodi? Expedita, dolorum?
        Veritatis aperiam nobis sunt, itaque odit voluptate numquam sit rerum deleniti in quae voluptatibus pariatur ipsam eligendi qui, ut praesentium eum, sed rem facere nemo quis id voluptatum eaque! Nam?
        Nisi id atque sequi nemo veritatis mollitia quam nostrum nobis iure. Deserunt voluptates aliquid, architecto sit inventore nemo ex assumenda minus, veniam beatae dicta eum quibusdam iure quos quo optio.
        Magnam reiciendis, ipsa nam repellendus veniam recusandae, saepe unde eum qui possimus voluptatum sint minus nemo! Reiciendis nihil, unde explicabo perspiciatis eius voluptatum sunt, nesciunt cum in totam voluptatibus tempora?
        Iure et amet quos quae dolorum dicta dolore, nesciunt nihil repudiandae enim, dolorem in nobis consequatur eligendi quam, nam ipsa doloremque accusamus atque cumque maxime! Repellat iure nihil natus doloribus?</p>
    </div>
    <!-- Barra de navegação -->
 <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
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