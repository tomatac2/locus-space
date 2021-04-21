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
<?php
if($this->request->session()->check('Flash')) {
	$flashSession = $this->request->session()->read('Flash');
	$this->request->session()->delete('Flash');
	foreach($flashSession as $flashMessages) {
		if(!isset($flashMessages[0])) {
			$flashMessages = [$flashMessages];
		}
		foreach($flashMessages as $flash) {
			$flashMsgClass = 'success';
			$flashMsg = $flash['message'];
			if(!empty($flash['params']['class'])) {
				$flashMsgClass = $flash['params']['class'];
			} else {
				if(!empty($flash['element'])) {
					if(strpos($flash['element'], 'error') !== false) {
						$flashMsgClass = 'error';
					} else if(strpos($flash['element'], 'success') !== false) {
						$flashMsgClass = 'success';
					} else if(strpos($flash['element'], 'warning') !== false) {
						$flashMsgClass = 'warning';
					} else if(strpos($flash['element'], 'info') !== false) {
						$flashMsgClass = 'info';
					}
				}
			}?>
			<div class='messageHolder'>
				<div class="<?php echo $flashMsgClass; ?>" id="flashMessage">
					<span><?php echo $flashMsg; ?></span>
					<a href='javascript:void(0)' class='closeMsg'><img src="<?php echo SITE_URL?>usermgmt/img/closelabel.png" border="0" alt="Close"></a>
				</div>
			</div>
<?php	}
	}
}?>