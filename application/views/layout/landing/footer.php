<footer>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="">UKSW</a></li>
                    <li><a href="">FEB UKSW</a></li>
                    <?php if (in_array(@$this->session->userdata('role'), ['superuser', 'admin'])): ?>
                        <li><a href="<?php echo base_url('dasbor') ?>">Dasbor</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© 2018 CodeBreaker</div>
            </div>
        </div>
    </div>
</footer>
<?php $dir = 'asset/landing/js/' ?>
<script src="<?php echo base_url() . $dir ?>jquery.min.js"></script>
<script src="<?php echo base_url() . $dir ?>script.min.js"></script>
<script src="<?php echo base_url() . $dir ?>function.js"></script>

  <!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
        <script src="<?= base_url();?>asset/Slider/jquery.slides.js"></script>
        <script>
            $(function () {
                $('#slides').slidesjs({
                    pagination: false,
                    generatePagination: false,
                    width: 950,
                    height: 400
                });
            });
            $(function(){
                $('a.slidesjs-previous').html('<i style="font-size:50px; margin-right:5px" class="fa fa-arrow-circle-left"></i>');
                $('a.slidesjs-next').html('<i style="font-size:50px; margin-left:5px;" class="fa fa-arrow-circle-right"></i>');
            });
        </script>