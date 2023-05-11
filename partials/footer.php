        <span onclick="goTop()" id="go-top" class="go-top"></span>

        <footer id="footer" class="app-footer">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-7 app-footer-copyright">
                        &copy;&nbsp;<?= date("Y") . ' ' . app()['info']['copyright-name'] ?> |
                        <a
                            href="<?= app()['info']['creator-url'] ?>"
                            target="_blank">
                            Created by
                            <img
                                src="<?= get_template_directory_uri() . app()['info']['logo-creator'] ?>"
                                alt="<?= app()['info']['creator'] ?>">
                        </a>
                    </div>

                    <?= component('footer/navigation', 'default') ?>

                </div>
            </div>
        </footer>
    </main>

<?php wp_footer(); ?>

</body>
</html>
