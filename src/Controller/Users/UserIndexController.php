<?php
/**
 * Passbolt ~ Open source password manager for teams
 * Copyright (c) Passbolt SARL (https://www.passbolt.com)
 *
 * Licensed under GNU Affero General Public License version 3 of the or any later version.
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Passbolt SARL (https://www.passbolt.com)
 * @license       https://opensource.org/licenses/AGPL-3.0 AGPL License
 * @link          https://www.passbolt.com Passbolt(tm)
 * @since         2.0.0
 */
namespace App\Controller\Users;

use App\Controller\AppController;
use Cake\Event\Event;

class UserIndexController extends AppController
{
    /**
     * Before filter
     *
     * @param Event $event An Event instance
     * @return \Cake\Http\Response|null
     */
    public function beforeFilter(Event $event)
    {
        // TODO do not allow index to be public
        $this->Auth->allow('index');

        return parent::beforeFilter($event);
    }

    /**
     * User Index action
     *
     * @return void
     */
    public function index()
    {
        $this->loadModel('Users');
        $users = $this->Users->find('index', ['role' => $this->User->role()]);
        $this->success($users);
    }
}