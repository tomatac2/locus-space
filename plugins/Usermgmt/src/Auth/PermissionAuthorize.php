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
namespace Usermgmt\Auth;
use Cake\Controller\ComponentRegistry;
use Cake\Auth\BaseAuthorize;
use Cake\Network\Request;
use Cake\Utility\Inflector;
use Cake\ORM\TableRegistry;

class PermissionAuthorize extends BaseAuthorize {
	public $controller;
	public $session;

	public function __construct(ComponentRegistry $registry, array $config = []) {
		parent::__construct($registry, $config);
		$this->controller = $registry->getController();
		$this->session = $registry->getController()->request->session();
	}
	public function authorize($user, Request $request) {
            
		$controller = Inflector::camelize($request['controller']);
		$action = $request['action'];
		$plugin = $request['plugin'];
		$actionUrl = $controller.'/'.$action;
		if($plugin) {
			$actionUrl = $plugin.'/'.$actionUrl;
		}
		$prefix = null;
		if(isset($request['prefix'])) {
			$prefix = strtolower(Inflector::camelize($request['prefix']));
		}
		$requested = (isset($request['requested']) && $request['requested']==1) ? true : false;
		if(!$requested && !defined('CRON_DISPATCHER')) {
			$userGroupModel = TableRegistry::get('Usermgmt.UserGroups');
			if(!$userGroupModel->isUserGroupAccess($controller, $action, $plugin, $prefix, $user['user_group_id'])) {
				$this->controller->Auth->config('authError', __('You are not allowed to view that page.'));
				$this->controller->Auth->config('unauthorizedRedirect', ['plugin'=>'Usermgmt', 'controller'=>'Users', 'action'=>'accessDenied']);
				return false;
			}
		}
		return true;
	}
}