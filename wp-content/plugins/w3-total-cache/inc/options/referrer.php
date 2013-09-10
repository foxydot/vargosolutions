<?php if (!defined('W3TC')) die(); ?>
<?php include W3TC_INC_DIR . '/options/common/header.php'; ?>

<script type="text/javascript">/*<![CDATA[*/
    var referrer_themes = {};
    <?php foreach ($themes as $theme_key => $theme_name): ?>
    referrer_themes['<?php echo addslashes($theme_key); ?>'] = '<?php echo addslashes($theme_name); ?>';
    <?php endforeach; ?>
/*]]>*/</script>

<p>
    Referrer group support is always <span class="w3tc-enabled">enabled</span>.
</p>

<form id="referrer_form" action="admin.php?page=<?php echo $this->_page; ?>" method="post">
    <div class="metabox-holder">
        <?php echo $this->postbox_header('Manage Referrer Groups', '', 'manage'); ?>
        <p>
            <input id="referrer_add" type="button" class="button" value="Create a group" /> of referrers by specifying names in the referrers field. Assign a set of referrers to use a specific theme, redirect them to another domain, create referrer groups to ensure that a unique cache is created for each referrer group. Drag and drop groups into order (if needed) to determine their priority (top -&gt; down).
        </p>

        <ul id="referrer_groups">
            <?php $index = 0; foreach ($groups as $group => $group_config): $index++; ?>
            <li id="referrer_group_<?php echo htmlspecialchars($group); ?>">
                <table class="form-table">
                    <tr>
                        <th>
                            Group name:
                        </th>
                        <td>
                            <span class="referrer_group_number"><?php echo $index; ?>.</span> <span class="referrer_group"><?php echo htmlspecialchars($group); ?></span> <input type="button" class="button referrer_delete" value="Delete group" />
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="referrer_groups_<?php echo htmlspecialchars($group); ?>_enabled">Enabled:</label>
                        </th>
                        <td>
                            <input type="hidden" name="referrer_groups[<?php echo htmlspecialchars($group); ?>][enabled]" value="0" />
                            <input id="referrer_groups_<?php echo htmlspecialchars($group); ?>_enabled" type="checkbox" name="referrer_groups[<?php echo htmlspecialchars($group); ?>][enabled]" value="1"<?php checked($group_config['enabled'], true); ?> />
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="referrer_groups_<?php echo htmlspecialchars($group); ?>_theme">Theme:</label>
                        </th>
                        <td>
                            <select id="referrer_groups_<?php echo htmlspecialchars($group); ?>_theme" name="referrer_groups[<?php echo htmlspecialchars($group); ?>][theme]">
                                <option value="">-- Pass-through --</option>
                                <?php foreach ($themes as $theme_key => $theme_name): ?>
                                <option value="<?php echo htmlspecialchars($theme_key); ?>"<?php selected($theme_key, $group_config['theme']); ?>><?php echo htmlspecialchars($theme_name); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <br /><span class="description">Assign this group of referrers to a specific theme. Selecting "Pass-through" allows any plugin(s) (e.g. referrer plugins) to properly handle requests for these referrers. If the "redirect users to" field is not empty, this setting is ignored.</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="referrer_groups_<?php echo htmlspecialchars($group); ?>_redirect">Redirect users to:</label>
                        </th>
                        <td>
                            <input id="referrer_groups_<?php echo htmlspecialchars($group); ?>_redirect" type="text" name="referrer_groups[<?php echo htmlspecialchars($group); ?>][redirect]" value="<?php echo htmlspecialchars($group_config['redirect']); ?>" size="60" />
                            <br /><span class="description">A 302 redirect is used to send this group of referrers to another hostname (domain).</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="referrer_groups_<?php echo htmlspecialchars($group); ?>_referrers">Referrers:</label>
                        </th>
                        <td>
                            <textarea id="referrer_groups_<?php echo htmlspecialchars($group); ?>_referrers" name="referrer_groups[<?php echo htmlspecialchars($group); ?>][referrers]" rows="10" cols="50"><?php echo htmlspecialchars(implode("\r\n", (array) $group_config['referrers'])); ?></textarea>
                            <br /><span class="description">Specify the referrers for this group. Remember to escape special characters like spaces, dots or dashes with a backslash. Regular expressions are also supported.</span>
                        </td>
                    </tr>
                </table>
            </li>
            <?php endforeach; ?>
        </ul>
        <div id="referrer_groups_empty" style="display: none;">No groups added. All referrers recieve the same page and minify cache results.</div>

        <p class="submit">
            <?php echo $this->nonce_field('w3tc'); ?>
            <input type="submit" name="w3tc_save_options" class="w3tc-button-save button-primary" value="Save all settings" />
        </p>
        <?php echo $this->postbox_footer(); ?>
    </div>
</form>

<?php include W3TC_INC_DIR . '/options/common/footer.php'; ?>
