<!-- content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 konten">

                <div class="row mb-3">
                    <div class="col-md-5 bg-primary">
                        <h5 class="text-center">Latest Release</h5>
                    </div>
                    <div class="col-md-7 bg-dark">
                        
                    </div>
                </div>

                <!-- list anime -->
                <div class="row">

                    <?php foreach ($data['anime'] as $anime): ?>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href=""><h5 class="card-title"><?= $anime['judul']; ?> Episode <?= $anime['episode']; ?></h5></a>
                                        <small class="text-muted"><strong>Posted By :</strong> Admin | <?= $anime['username']; ?></small>
                                        <br>
                                        <small class="text-muted"><strong>Releashed On </strong><?= tgl_lengkap($anime['waktu_rilis']); ?></small>
                                        <br>
                                        <a href="<?= BASEURL; ?>/anime/detail/<?= $anime['anime_id']; ?>"><small><?= $anime['judul']; ?></small></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img class="card-img-top" src="<?= BASEURL; ?>/data/thumbnail/<?= $anime['thumbnail']; ?>" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <!-- end list anime -->

            </div>

            <!-- sidebar -->
            <div class="col-md-4 sidebar">

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                INFO
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laudantium natus illo nobis odio quae fugit autem placeat ratione? Porro placeat sint qui dicta accusantium fugit tempore explicabo quos. Nemo.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                LATEST SERIES
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laudantium natus illo nobis odio quae fugit autem placeat ratione? Porro placeat sint qui dicta accusantium fugit tempore explicabo quos. Nemo.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                TOP ANIME
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laudantium natus illo nobis odio quae fugit autem placeat ratione? Porro placeat sint qui dicta accusantium fugit tempore explicabo quos. Nemo.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end sidebar -->

        </div>
    </div>
</section>
<!-- end content -->