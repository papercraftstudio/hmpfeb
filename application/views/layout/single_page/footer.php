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