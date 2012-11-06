<?php
/*
 *  Contact form captcha for magento
    Copyright (C) 2012  Fazle Elahee

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class Bondmedia_Bondcaptcha_Block_Captcha extends Mage_Core_Block_Template
{
    public function getContactFormCaptcha() {
        $captcha_url = Mage::getUrl('bondcaptcha/bondmedia/captcha');
        ?>
            <li>
                <label for="captcha" class="required"><?php echo Mage::helper('contacts')->__('Security Code <em>*</em>') ?> <img src="<?php echo $captcha_url; ?>" id="captcha"/></label>
                <br />
                <a href="#" onclick=" document.getElementById('captcha').src='<?php echo $captcha_url; ?>?'+Math.random();" id="change-image">Not readable? Change text.</a>
                <div class="input-box">
                    <input name="captcha" id="captcha" title="Captcha" value="" class="input-text required-entry validate-captcha" type="text" />
                </div>
            </li>
        <?php
    }
}

?>