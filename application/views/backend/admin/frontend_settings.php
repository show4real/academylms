<?php $homepage_banner = themeConfiguration(get_frontend_settings('theme'), 'homepage'); ?>
<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('website_settings'); ?></h4>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">


                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#frontendsettings" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block"><?php echo site_phrase('Frontend Settings'); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#homePageLayout" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block"><?php echo site_phrase('Home page layout'); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#motivational_speech" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block"><?php echo get_phrase('Motivational Speech'); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#websitefaqs" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block"><?php echo get_phrase('Website FAQS'); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#recaptcha" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block"><?php echo get_phrase('Recaptcha'); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#logo_and_images" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block"><?php echo get_phrase('Logo & Images'); ?></span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="frontendsettings">
                        <h4 class="mb-3 header-title"><?php echo get_phrase('frontend_website_settings');?></h4>
                        <form class="required-form" action="<?php echo site_url('admin/frontend_settings/frontend_update'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="banner_title"><?php echo get_phrase('banner_title'); ?><span class="required">*</span></label>
                                <input type="text" name = "banner_title" id = "banner_title" class="form-control" value="<?php echo get_frontend_settings('banner_title');  ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="banner_sub_title"><?php echo get_phrase('banner_sub_title'); ?><span class="required">*</span></label>
                                <input type="text" name = "banner_sub_title" id = "banner_sub_title" class="form-control" value="<?php echo get_frontend_settings('banner_sub_title');  ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="cookie_status"><?php echo get_phrase('cookie_status'); ?><span class="required">*</span></label><br>
                                <input type="radio" value="active" name="cookie_status" <?php if(get_frontend_settings('cookie_status') == 'active') echo 'checked'; ?>> <?php echo get_phrase('active'); ?>
                                &nbsp;&nbsp;
                                <input type="radio" value="inactive" name="cookie_status" <?php if(get_frontend_settings('cookie_status') == 'inactive') echo 'checked'; ?>> <?php echo get_phrase('inactive'); ?>
                            </div>
                            <div class="form-group">
                                <label for="cookie_note"><?php echo get_phrase('cookie_note'); ?></label>
                                <textarea name="cookie_note" id = "cookie_note" class="form-control" rows="5"><?php echo get_frontend_settings('cookie_note'); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="facebook"><?php echo get_phrase('facebook'); ?></label>
                                <input type="text" name = "facebook" id = "facebook" class="form-control" value="<?php echo get_frontend_settings('facebook');  ?>">
                            </div>

                            <div class="form-group">
                                <label for="twitter"><?php echo get_phrase('twitter'); ?></label>
                                <input type="text" name = "twitter" id = "twitter" class="form-control" value="<?php echo get_frontend_settings('twitter');  ?>">
                            </div>

                            <div class="form-group">
                                <label for="linkedin"><?php echo get_phrase('linkedin'); ?></label>
                                <input type="text" name = "linkedin" id = "linkedin" class="form-control" value="<?php echo get_frontend_settings('linkedin');  ?>">
                            </div>

                            <div class="form-group">
                                <label for="cookie_policy"><?php echo get_phrase('cookie_policy'); ?></label>
                                <textarea name="cookie_policy" id = "cookie_policy" class="form-control" rows="5"><?php echo get_frontend_settings('cookie_policy'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="about_us"><?php echo get_phrase('about_us'); ?></label>
                                <textarea name="about_us" id = "about_us" class="form-control" rows="5"><?php echo get_frontend_settings('about_us'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="terms_and_condition"><?php echo get_phrase('terms_and_condition'); ?></label>
                                <textarea name="terms_and_condition" id ="terms_and_condition" class="form-control" rows="5"><?php echo get_frontend_settings('terms_and_condition'); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="privacy_policy"><?php echo get_phrase('privacy_policy'); ?></label>
                                <textarea name="privacy_policy" id = "privacy_policy" class="form-control" rows="5"><?php echo get_frontend_settings('privacy_policy'); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="refund_policy"><?php echo get_phrase('refund_policy'); ?></label>
                                <textarea name="refund_policy" id = "refund_policy" class="form-control" rows="5"><?php echo get_frontend_settings('refund_policy'); ?></textarea>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary btn-block" onclick="checkRequiredFields()"><?php echo get_phrase('update_settings'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="homePageLayout">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img height="250px" src="<?php echo site_url('assets/frontend/default-new/home/home_1.png') ?>">
                                        <a class="btn btn-outline-primary mt-4 w-100 text-center <?php if(get_frontend_settings('home_page') == 'home_1')echo 'bg-primary text-white'; ?>" href="<?php echo site_url('admin/home_page_layout/home_1') ?>">
                                            <?php if(get_frontend_settings('home_page') == 'home_1'): ?>
                                                <?php echo get_phrase('Activated') ?>
                                            <?php else: ?>
                                                <?php echo get_phrase('Active') ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img height="250px" src="<?php echo site_url('assets/frontend/default-new/home/home_2.png') ?>">
                                        <a class="btn btn-outline-primary mt-4 w-100 text-center <?php if(get_frontend_settings('home_page') == 'home_2')echo 'bg-primary text-white'; ?>" href="<?php echo site_url('admin/home_page_layout/home_2') ?>">
                                            <?php if(get_frontend_settings('home_page') == 'home_2'): ?>
                                                <?php echo get_phrase('Activated') ?>
                                            <?php else: ?>
                                                <?php echo get_phrase('Active') ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img height="250px" src="<?php echo site_url('assets/frontend/default-new/home/home_3.png') ?>">
                                        <a class="btn btn-outline-primary mt-4 w-100 text-center <?php if(get_frontend_settings('home_page') == 'home_3')echo 'bg-primary text-white'; ?>" href="<?php echo site_url('admin/home_page_layout/home_3') ?>">
                                            <?php if(get_frontend_settings('home_page') == 'home_3'): ?>
                                                <?php echo get_phrase('Activated') ?>
                                            <?php else: ?>
                                                <?php echo get_phrase('Active') ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img height="250px" src="<?php echo site_url('assets/frontend/default-new/home/home_4.png') ?>">
                                        <a class="btn btn-outline-primary mt-4 w-100 text-center <?php if(get_frontend_settings('home_page') == 'home_4')echo 'bg-primary text-white'; ?>" href="<?php echo site_url('admin/home_page_layout/home_4') ?>">
                                            <?php if(get_frontend_settings('home_page') == 'home_4'): ?>
                                                <?php echo get_phrase('Activated') ?>
                                            <?php else: ?>
                                                <?php echo get_phrase('Active') ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img height="250px" src="<?php echo site_url('assets/frontend/default-new/home/home_5.png') ?>">
                                        <a class="btn btn-outline-primary mt-4 w-100 text-center <?php if(get_frontend_settings('home_page') == 'home_5')echo 'bg-primary text-white'; ?>" href="<?php echo site_url('admin/home_page_layout/home_5') ?>">
                                            <?php if(get_frontend_settings('home_page') == 'home_5'): ?>
                                                <?php echo get_phrase('Activated') ?>
                                            <?php else: ?>
                                                <?php echo get_phrase('Active') ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img height="250px" src="<?php echo site_url('assets/frontend/default-new/home/home_6.png') ?>">
                                        <a class="btn btn-outline-primary mt-4 w-100 text-center <?php if(get_frontend_settings('home_page') == 'home_6')echo 'bg-primary text-white'; ?>" href="<?php echo site_url('admin/home_page_layout/home_6') ?>">
                                            <?php if(get_frontend_settings('home_page') == 'home_6'): ?>
                                                <?php echo get_phrase('Activated') ?>
                                            <?php else: ?>
                                                <?php echo get_phrase('Active') ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="tab-pane" id="motivational_speech">
                        <h4 class="mb-3 header-title"><?php echo get_phrase('Motivational Speech');?></h4>
                        <form action="<?php echo site_url('admin/frontend_settings/motivational_speech'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id = "motivational_speech_area">
                                        <?php $motivational_speeches = count(json_decode(get_frontend_settings('motivational_speech'), true)) > 0 ? json_decode(get_frontend_settings('motivational_speech'), true):[['title' => '', 'description' => '', 'image' => '']]; ?>
                                        <?php foreach($motivational_speeches as $key => $motivational_speech): ?>
                                            <div class="d-flex mt-2">
                                                <div class="flex-grow-1 px-3 mb-3">
                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Title'); ?></label>
                                                        <input type="text" class="form-control" name="titles[]" placeholder="<?php echo get_phrase('Title'); ?>" value="<?php echo $motivational_speech['title']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Description'); ?></label>
                                                        <textarea name="descriptions[]" class="form-control" placeholder="<?php echo get_phrase('Description'); ?>"><?php echo $motivational_speech['description']; ?></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Image'); ?></label>
                                                        <div class="custom-file">
                                                            <input name="previous_images[]" type="hidden" value="<?php echo $motivational_speech['image']; ?>">
                                                            <input type="file" class="custom-file-input" name="images[]" onchange="changeTitleOfImageUploader(this)" accept="image/*">
                                                            <label class="custom-file-label" for="addon_zip"><?php echo get_phrase('Upload image'); ?></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php if($key == 0): ?>
                                                    <div class="" style="padding-top: 32px;">
                                                        <button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendMotivational_speech()"> <i class="fa fa-plus"></i> </button>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="" style="padding-top: 32px;">
                                                        <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeMotivational_speech(this)"> <i class="fa fa-minus"></i> </button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>

                                        <div id = "blank_motivational_speech_field">
                                            <div class="d-flex pt-2 border-top">
                                                <div class="flex-grow-1 px-3">
                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Title'); ?></label>
                                                        <input type="text" class="form-control" name="titles[]" placeholder="<?php echo get_phrase('faq_question'); ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Description'); ?></label>
                                                        <textarea name="descriptions[]" class="form-control mt-2" placeholder="<?php echo get_phrase('Description'); ?>"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Image'); ?></label>
                                                        <div class="custom-file">
                                                            <input name="previous_images[]" type="hidden" value="">
                                                            <input type="file" class="custom-file-input" name="images[]" onchange="changeTitleOfImageUploader(this)" accept="image/*">
                                                            <label class="custom-file-label" for="addon_zip"><?php echo get_phrase('Upload image'); ?></label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="" style="padding-top: 32px;">
                                                    <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeFaq(this)"> <i class="fa fa-minus"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pt-0 mt-0">
                                        <button type="submit" class="btn btn-primary ml-3"><?php echo get_phrase('Save changes'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="websitefaqs">
                        <h4 class="mb-3 header-title"><?php echo get_phrase('Website FAQS');?></h4>
                        <form action="<?php echo site_url('admin/frontend_settings/website_faq'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id = "faq_area">
                                        <?php $faqs = count(json_decode(get_frontend_settings('website_faqs'), true)) > 0 ? json_decode(get_frontend_settings('website_faqs'), true):[['question' => '', 'answer' => '']]; ?>
                                        <?php foreach($faqs as $key => $faq): ?>
                                            <div class="d-flex mt-2">
                                                <div class="flex-grow-1 px-3 mb-3">
                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Question'); ?></label>
                                                        <input type="text" class="form-control" name="questions[]" id="questions" placeholder="<?php echo get_phrase('faq_question'); ?>" value="<?php echo $faq['question']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Answer'); ?></label>
                                                        <textarea name="answers[]" class="form-control" placeholder="<?php echo get_phrase('answer'); ?>"><?php echo $faq['answer']; ?></textarea>
                                                    </div>
                                                </div>

                                                <?php if($key == 0): ?>
                                                    <div class="" style="padding-top: 32px;">
                                                        <button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendFaq()"> <i class="fa fa-plus"></i> </button>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="" style="padding-top: 32px;">
                                                        <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeFaq(this)"> <i class="fa fa-minus"></i> </button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>

                                        <div id = "blank_faq_field">
                                            <div class="d-flex pt-2 border-top">
                                                <div class="flex-grow-1 px-3">
                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Question'); ?></label>
                                                        <input type="text" class="form-control" name="questions[]" id="questions" placeholder="<?php echo get_phrase('faq_question'); ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo get_phrase('Answer'); ?></label>
                                                        <textarea name="answers[]" class="form-control mt-2" placeholder="<?php echo get_phrase('answer'); ?>"></textarea>
                                                    </div>

                                                </div>
                                                <div class="" style="padding-top: 32px;">
                                                    <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeFaq(this)"> <i class="fa fa-minus"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pt-0 mt-0">
                                        <button type="submit" class="btn btn-primary ml-3"><?php echo get_phrase('Save changes'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="recaptcha">
                        <h4 class="mb-3 header-title"><?php echo get_phrase('recaptcha_settings');?></h4>

                        <form action="<?php echo site_url('admin/frontend_settings/recaptcha_update'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label><?php echo get_phrase('recaptcha_status'); ?><span class="required">*</span></label><br>
                                <input type="radio" id="recaptcha_active" value="1" name="recaptcha_status" <?php if(get_frontend_settings('recaptcha_status') == 1) echo 'checked'; ?>> <label for="recaptcha_active"><?php echo get_phrase('active'); ?></label>
                                &nbsp;&nbsp;
                                <input type="radio" id="recaptcha_inactive" value="0" name="recaptcha_status" <?php if(get_frontend_settings('recaptcha_status') == 0) echo 'checked'; ?>> <label for="recaptcha_inactive"><?php echo get_phrase('inactive'); ?></label>
                            </div>

                            <div class="form-group">
                                <label for="recaptcha_sitekey"><?php echo get_phrase('recaptcha_sitekey'); ?> (v2)<span class="required">*</span></label>
                                <input type="text" name = "recaptcha_sitekey" id = "recaptcha_sitekey" class="form-control" value="<?php echo get_frontend_settings('recaptcha_sitekey');  ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="recaptcha_secretkey"><?php echo get_phrase('recaptcha_secretkey'); ?> (v2)<span class="required">*</span></label>
                                <input type="text" name = "recaptcha_secretkey" id = "recaptcha_secretkey" class="form-control" value="<?php echo get_frontend_settings('recaptcha_secretkey');  ?>" required>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-block"><?php echo get_phrase('update_recaptcha_settings'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="logo_and_images">
                        <div class="row justify-content-center">
                            <?php if (count($homepage_banner) > 0):
                              if ($homepage_banner['homepage_banner_image']):?>
                              <div class="col-xl-4 col-lg-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="col-xl-12">
                                              <h4 class="mb-3 header-title"><?php echo get_phrase('update_banner_image');?></h4>
                                              <div class="row justify-content-center">
                                                  <form action="<?php echo site_url('admin/frontend_settings/banner_image_update'); ?>" method="post" enctype="multipart/form-data" style="text-align: center;">
                                                      <div class="form-group mb-2">
                                                          <div class="wrapper-image-preview">
                                                              <div class="box" style="width: 250px;">
                                                                  <div class="js--image-preview" style="background-image: url(<?php echo base_url('uploads/system/'.get_current_banner('banner_image'));?>); background-color: #F5F5F5;"></div>
                                                                  <div class="upload-options">
                                                                      <label for="banner_image" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_banner_image'); ?> <br> <small>(<?php echo $homepage_banner['homepage_banner_image_size']; ?>)</small> </label>
                                                                      <input id="banner_image" style="visibility:hidden;" type="file" class="image-upload" name="banner_image" accept="image/*">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <button type="submit" class="btn btn-primary btn-block"><?php echo get_phrase('upload_banner_image'); ?></button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php endif; ?>
                            <?php endif; ?>

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-xl-12">
                                            <h4 class="mb-3 header-title"><?php echo get_phrase('update_light_logo');?></h4>
                                            <div class="row justify-content-center">
                                                <form action="<?php echo site_url('admin/frontend_settings/light_logo'); ?>" method="post" enctype="multipart/form-data" style="text-align: center;">
                                                    <div class="form-group mb-2">
                                                        <div class="wrapper-image-preview">
                                                            <div class="box" style="width: 250px;">
                                                                <div class="js--image-preview" style="background-image: url(<?php echo base_url('uploads/system/'.get_frontend_settings('light_logo')); ?>); background-color: #F5F5F5;"></div>
                                                                <div class="upload-options">
                                                                    <label for="light_logo" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_light_logo'); ?> <br> <small>(330 X 70)</small> </label>
                                                                    <input id="light_logo" style="visibility:hidden;" type="file" class="image-upload" name="light_logo" accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block"><?php echo get_phrase('upload_light_logo'); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-lg-12">
                                            <h4 class="mb-3 header-title"><?php echo get_phrase('update_dark_logo');?></h4>
                                            <div class="row justify-content-center">
                                                <form action="<?php echo site_url('admin/frontend_settings/dark_logo'); ?>" method="post" enctype="multipart/form-data" style="text-align: center;">
                                                    <div class="form-group mb-2">
                                                        <div class="wrapper-image-preview">
                                                            <div class="box" style="width: 250px;">
                                                                <div class="js--image-preview" style="background-image: url(<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>); background-color: #F5F5F5;"></div>
                                                                <div class="upload-options">
                                                                    <label for="dark_logo" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_dark_logo'); ?> <br> <small>(330 X 70)</small> </label>
                                                                    <input id="dark_logo" style="visibility:hidden;" type="file" class="image-upload" name="dark_logo" accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block"><?php echo get_phrase('upload_dark_logo'); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-lg-12">
                                            <h4 class="mb-3 header-title"><?php echo get_phrase('update_small_logo');?></h4>
                                            <div class="row justify-content-center">
                                                <form action="<?php echo site_url('admin/frontend_settings/small_logo'); ?>" method="post" enctype="multipart/form-data" style="text-align: center;">
                                                    <div class="form-group mb-2">
                                                        <div class="wrapper-image-preview">
                                                            <div class="box" style="width: 250px;">
                                                                <div class="js--image-preview" style="background-image: url(<?php echo base_url('uploads/system/'.get_frontend_settings('small_logo')); ?>); background-color: #F5F5F5;"></div>
                                                                <div class="upload-options">
                                                                    <label for="small_logo" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_small_logo'); ?> <br> <small>(49 X 58)</small> </label>
                                                                    <input id="small_logo" style="visibility:hidden;" type="file" class="image-upload" name="small_logo" accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block"><?php echo get_phrase('upload_small_logo'); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-lg-12">
                                            <h4 class="mb-3 header-title"><?php echo get_phrase('update_favicon');?></h4>
                                            <div class="row justify-content-center">
                                                <form action="<?php echo site_url('admin/frontend_settings/favicon'); ?>" method="post" enctype="multipart/form-data" style="text-align: center;">
                                                    <div class="form-group mb-2">
                                                        <div class="wrapper-image-preview">
                                                            <div class="box" style="width: 250px;">
                                                                <div class="js--image-preview" style="background-image: url(<?php echo base_url('uploads/system/'.get_frontend_settings('favicon')); ?>); background-color: #F5F5F5;"></div>
                                                                <div class="upload-options">
                                                                    <label for="favicon" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('upload_favicon'); ?> <br> <small>(90 X 90)</small> </label>
                                                                    <input id="favicon" style="visibility:hidden;" type="file" class="image-upload" name="favicon" accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block"><?php echo get_phrase('upload_favicon'); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body-->
        </div>
    </div>
</div>




<script type="text/javascript">
    var blank_faq = jQuery('#blank_faq_field').html();
    var blank_motivational_speech = jQuery('#blank_motivational_speech_field').html();
    $(document).ready(function () {
        initSummerNote(['#about_us', '#terms_and_condition', '#privacy_policy', '#cookie_policy', '#refund_policy']);
        jQuery('#blank_faq_field').hide();
        jQuery('#blank_motivational_speech_field').hide();
    });


    function appendFaq() {
      jQuery('#faq_area').append(blank_faq);
    }
    function removeFaq(faqElem) {
      jQuery(faqElem).parent().parent().remove();
    }

    function appendMotivational_speech() {
      jQuery('#motivational_speech_area').append(blank_motivational_speech);
    }
    function removeMotivational_speech(faqElem) {
      jQuery(faqElem).parent().parent().remove();
    }

</script>