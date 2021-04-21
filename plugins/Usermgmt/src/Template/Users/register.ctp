<?php
/* Cakephp 3.x User Management Premium Version (a product of Ektanjali Softwares Pvt Ltd)
  Website- http://ektanjali.com
  Plugin Demo- http://cakephp3-user-management.ektanjali.com/
  Author- Chetan Varshney (The Director of Ektanjali Softwares Pvt Ltd)
  Plugin Copyright No- 11498/2012-CO/L

  UMPremium is a copyrighted work of authorship. Chetan Varshney retains ownership of the product and any copies of it, regardless of the form in which the copies may exist. This license is not a sale of the original product or any copies.

  By installing and using UMPremium on your server, you agree to the following terms and conditions. Such agreement is either on your own behalf or on behalf of any corporate entity which employs you or which you represent ('Corporate Licensee'). In this Agreement, 'you' includes both the reader and any Corporate Licensee and Chetan Varshney.

  The Product is licensed only to you. You may not rent, lease, sublicense, sell, assign, pledge, transfer or otherwise dispose of the Product in any form, on a temporary or permanent basis, without the prior written consent of Chetan Varshney.

  The Product source code may be altered (at your risk)

  All Product copyright notices within the scripts must remain unchanged (and visible).

  If any of the terms of this Agreement are violated, Chetan Varshney reserves the right to action against you.

  The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Product.

  THE PRODUCT IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE PRODUCT OR THE USE OR OTHER DEALINGS IN THE PRODUCT. */
?>
<div class="panel panel-primary">
    <span class="panel-title-right">
        <?php echo $this->Html->link(__('تسجيل الدخول', true), ['controller' => 'Users', 'action' => 'login', 'plugin' => 'Usermgmt'], ['class' => 'btn btn-default']); ?>
    </span>	
    <div>
        <span class="addmaincont" style="text-align: center;">
            <?php echo __('تسجيل العضوية'); ?>
        </span>

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <?php echo $this->element('Usermgmt.ajax_validation', ['formId' => 'registerForm', 'submitButtonId' => 'registerSubmitBtn']); ?>
                <?php echo $this->Form->create($userEntity, ['id' => 'registerForm', 'class' => 'form-horizontal', 'novalidate' => true]); ?>
                <div class="um-form-row form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('Users.user_group_id', ['type' => 'select', 'options' => $userGroups, 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                    <label class="col-sm-3 control-label required"><?php echo __('مجموعة'); ?></label>

                </div>
                <div class="um-form-row form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('Users.username', ['type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                    <label class="col-sm-3 control-label required"><?php echo __('اسم المستخدم'); ?></label>

                </div>
                <div class="um-form-row form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('Users.first_name', ['type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>	
                    <label class="col-sm-3 control-label required"><?php echo __('الاسم الاول '); ?></label>

                </div>
                <div class="um-form-row form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('Users.last_name', ['type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                    <label class="col-sm-3 control-label"><?php echo __('لقب العائلة '); ?></label>

                </div>
                <div class="um-form-row form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('Users.email', ['type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                    <label class="col-sm-3 control-label required"><?php echo __('البريد الاكترونى'); ?></label>

                </div>
                <div class="um-form-row form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('Users.password', ['type' => 'password', 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                    <label class="col-sm-3 control-label required"><?php echo __('الرقم السرى'); ?></label>

                </div>
                <div class="um-form-row form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('Users.cpassword', ['type' => 'password', 'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                    <label class="col-sm-3 control-label required"><?php echo __('تأكيد الرقم السرى '); ?></label>

                </div>
                <div class="um-form-row form-group">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('branche_id', [ 'options' => $ourworkdss,'label' => false, 'div' => false, 'class' => 'form-control']); ?>
                    </div>
                    <label class="col-sm-3 control-label required"><?php echo __('اسم الفرع'); ?></label>

                </div>
                <?php
                if ($this->UserAuth->canUseRecaptha('registration')) {
                    $errors = $userEntity->errors();
                    $error = "";
                    if (isset($errors['captcha']['_empty'])) {
                        $error = $errors['captcha']['_empty'];
                    } else if (isset($errors['captcha']['mustMatch'])) {
                        $error = $errors['captcha']['mustMatch'];
                    }
                    ?>
                    <div class="um-form-row form-group">
                        <div class="col-sm-6">
    <?php echo $this->UserAuth->showCaptcha($error); ?>
                        </div>
                        <label class="col-sm-3 control-label required"><?php echo __('Prove you\'re not a robot'); ?></label>

                    </div>
                    <?php } ?>
                <div class="um-button-row">
                <?php echo $this->Form->Submit(__('Sign Up'), ['div' => false, 'class' => 'btn btn-primary', 'id' => 'registerSubmitBtn']); ?>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
<?php echo $this->element('Usermgmt.provider'); ?>
            </div>
        </div>
    </div>
</div>