 <section class="w3l-blog-sec py-5">
        <div class="services-layout py-md-4 py-3">
            <div class="container">
                <h3 class="title-big mb-4 pb-2">Blog Posts</h3>
                <div class="row">

                <?php
            
                $query = "Select * from posts;";
                $result = mysqli_query($conn,  $query);
                while ($row = mysqli_fetch_assoc($result))
                {
        
                ?>

                    <div class="col-lg-4 col-md-6 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <h3 class="date">21<sup>st</sup> October</h3>
                                <a href="#blog">
                                    <figure>
                                        <img class="img-responsive" src="assets/images/post/<?=$row['image'];?>" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#blog" class="vv-link"><?=$row['title']?></a>
                                </h3>
                                <ul class="admin-list">
                                    <li><a href="#blog"><span class="fa fa-user-circle"
                                                aria-hidden="true"></span>
                                            Admin</a></li>
                                    <li><a href="#blog"><span class="fa fa-heart" aria-hidden="true"></span>9
                                            Likes</a></li>
                                    <li><a href="#blog"><span class="fa fa-comments"
                                                aria-hidden="true"></span>9 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                   
                </div>
            </div>
        </div>
    </section>