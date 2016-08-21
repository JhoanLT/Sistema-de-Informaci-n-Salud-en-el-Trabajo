    <script>
        var url = "<?php echo URL; ?>";
    </script>


    <!-- jQuery -->
    <script src="<?php echo URL ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo URL ?>js/jqBootstrapValidation.js"></script>
    <script src="<?php echo URL ?>js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo URL ?>js/agency.min.js"></script>

    <script src = "<?php echo URL?>js/lobibox.min.js"></script>
    <script src = "<?php echo URL?>js/lobibox.js"></script>
    <script src = "<?php echo URL?>js/notifications.js"></script>
    <script src = "<?php echo URL?>js/notifications.min.js"></script>
    <script src = "<?php echo URL?>js/messageboxes.min.js"></script>
    <script src = "<?php echo URL?>js/select2.min.js"></script>
    <script src = "<?php echo URL?>js/select2.full.min.js"></script>

    </script>
      <?php if(isset($msj)): ?>
      <script type="text/javascript">
        <?= $msj ?>
      </script>
      <?php endif ?>
      <?php if(isset($msjs)): ?>
      <script type="text/javascript">
        <?= $msjs ?>
      </script>
      <?php endif ?>

</body>

</html>
