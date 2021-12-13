<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <!--<link rel="stylesheet" href="style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include 'style.css';?>
        </style>
    
</head>

<body>


    <div class="container p-3 pt-5 mt-5 ">

        <h1 class="heading text-center mt-5"> Ready to learn and contribute to the community? </h1>
        <p class="subheading text-center pb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae unde recusandae quibusdam </p>
        <div class="row pb-5 pt-2 col-lg-6 mx-auto border border-dark">
            <h3 class="pt-3 pb-1 text-center">
                 <?= $title; ?>
                
            </h3>
            <form method="post" class="col-8 " action="<?php echo base_url('registration/register'); ?>">



                <div class="px-4 pt-4 pb-4">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password2" placeholder="Confirm Password" required>
                    </div>
                    <?php echo validation_errors(); ?>
                    <div class="form-footer d-flex justify-content-between pt-2">
                        <button type="submit" class="btn btn-custom" id="sub1" disabled="disabled">Register</button>
                        <span class="signin pt-2 px-1 align-middle">
					Already a member? <a href="<?php echo base_url('login'); ?>" class="link-custom text-decoration-none">Sign in</a>
				</span>
                    </div>

                </div>
            </form>
            <form method="dialog" class="col-4 ">
                <div class=" tcbox pt-3 ">
                    <h6 class="text-center">
                        Terms & Conditions
                    </h6>
                </div>
                <div class="terms mx-auto border p-3 pr-4">
                    <p>
                        <b>AGREEMENT TO TERMS</b>
                        </h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate minima iste sapiente voluptatem corrupti ullam iure numquam enim atque, excepturi quis, dolor perferendis beatae impedit quod quae nisi magni odit consequatur
                            tempora est eos sunt et. Odio atque, veritatis est harum omnis quae porro eum modi mollitia, eligendi explicabo in? Nostrum maiores laborum sunt? Quis exercitationem, dolor commodi suscipit rerum saepe, laboriosam sequi a labore
                            temporibus repudiandae fugit voluptatibus veniam?
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, sunt itaque. At, harum est nostrum mollitia excepturi rerum repellat quibusdam!
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt harum dolores beatae nihil sed nostrum quae aperiam cum voluptates deleniti corrupti esse cupiditate veniam officia sint vitae saepe quas odit facere nam ad explicabo
                            perspiciatis, maiores eius? Provident, perspiciatis architecto enim in nesciunt quae cum, mollitia impedit libero aliquam similique!
                        </p>
                </div>
                <div class="checkbox form-check pt-2 ">
                    <input class=" form-check-input border-warning" type="checkbox" id="termsChkbx " onclick="change_button(this,'sub1')" />
                    <label class=" form-check-label " for="flexCheckDefault">
					  I accept T&C
					</label>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script type="text/javascript">
        function change_button(checkbx, button_id) {
            var btn = document.getElementById(button_id);
            if (checkbx.checked == true) {
                btn.disabled = "";
            } else {
                btn.disabled = "disabled";
            }
        }
    </script>
</body>

</html>