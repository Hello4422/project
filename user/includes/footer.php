

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="<?php echo BASE_URL?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo BASE_URL?>assets/vendor/validation/jqueryvalidate.min.js"></script>
      <script src="<?php echo BASE_URL?>assets/vendor/validation/additional-methods.min.js"></script>
      <script>
        $(document).ready(function(){
            if ($('#add-new-blog-form').length) {
                $('#add-new-blog-form').validate({
                    rules:{
                        blog_title:{
                            required:true,
                        },
                        blog_body:{
                            required:true,
                            minlength:200,
                            maxlength:2000,
                        },
                        blog_image:{
                            required:true,
                            accept:"jpg|png|jpeg|gif|webp"
                        }
                    },
                    messages:{
                              blog_title:{
                                    required:'Enter Blog Title',
                        },
                        blog_body:{
                            required:'Content of your blog',
                            minlength:'Minimum 200 Characters',
                            maxlength:'Maximum 2000 Characters',
                        },
                        blog_image:{
                            required:'Select blog image',
                            accept:"Only jpg,png,jpeg,gif,webp files are allowed"
                        },
                    }
                })
            }
        });
        




      </script>

</body>
</html>