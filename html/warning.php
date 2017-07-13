<p>
    <?php _e("DNUI (<b>D</b>elete <b>N</b>ot <b>U</b>sed <b>I</b>mage) will search images from the database and try to find it on every Post and Page if one image has one reference in this either post or page native to WordPress or  if any reference is found, the plugin will tell you that the image is used.",'dnui-delete-not-used-image-wordpress'); ?>
    <br/>
    <b class="label label-danger" ng-if="options.backup==0" ><?php _e("Warning the backup system is deactivated, see the option page",'dnui-delete-not-used-image-wordpress'); ?></b>
    <br/>
    <b class="label label-danger" ng-if="wc.active==1"><?php _e("Warning you use wooCommerce plugin and you can have false 'not used' label, you have two options, you can select all wooCommerce sizes in the ignore size list or download the PRO version",'dnui-delete-not-used-image-wordpress'); ?></b>
</p>
<h3><?php _e("Where i can foud DNUI PRO",'dnui-delete-not-used-image-wordpress'); ?></h3>
<p>
   <b> <a href="https://apps.nicearma.com/product/dnui-delete-not-used-image-pro/"><?php _e("DNUI PRO version have some useful features:",'dnui-delete-not-used-image-wordpress'); ?></a></b>
<ol>
    <li><strong><?php _e("Compatibility with WooCommerce",'dnui-delete-not-used-image-wordpress'); ?></strong> <?php _e("(the main WooCommerce plugin, not other extends plugins)",'dnui-delete-not-used-image-wordpress'); ?></li>
    <li><?php _e("Ignore images by clicking in the image name",'dnui-delete-not-used-image-wordpress'); ?></li>
    <li><?php _e("Ignore size by clicking in the size name and include this size name to the ignore size list if this size does not exist",'dnui-delete-not-used-image-wordpress'); ?>
    </li>
    <li><strong><?php _e("Delete all automatic button,",'dnui-delete-not-used-image-wordpress'); ?></strong> <?php _e(" this will go page by page and delete all images not used",'dnui-delete-not-used-image-wordpress'); ?></li>
    <li><?php _e("Restore all backup",'dnui-delete-not-used-image-wordpress'); ?></li>
    <li><?php _e("Delete all backup",'dnui-delete-not-used-image-wordpress'); ?></li>
</ol>
</p>
<h3><?php _e("How to support this plugin",'dnui-delete-not-used-image-wordpress'); ?></h3>
<p><?php _e("You can give a good or bad review at ",'dnui-delete-not-used-image-wordpress'); ?><a href="https://wordpress.org/support/view/plugin-reviews/dnui-delete-not-used-image-wordpress"><?php _e("DNUI reviews",'dnui-delete-not-used-image-wordpress'); ?></a><?php _e(" or buy the DNUI PRO version",'dnui-delete-not-used-image-wordpress'); ?></p>
<h3><?php _e("Why i have to do Backup?",'dnui-delete-not-used-image-wordpress'); ?></h3>
<p>
    <?php _e("This plugin will delete images and information from your server and the database, so you have to do a BACKUP every time you want to use this plugin.",'dnui-delete-not-used-image-wordpress'); ?>
</p>

<h3><?php _e("Is the backup system from the DNUI plugin enough?",'dnui-delete-not-used-image-wordpress'); ?></h3>
<p>
    <?php _e("Yes and no, if you have the backup option active, the plugin will try to do one backup of every image you are try to delete, but this is not the main purpose of the DNUI plugin, so is not bullet proof",'dnui-delete-not-used-image-wordpress'); ?>
    <br/>
    <?php _e("Under plugins page there are various more effective plugins you can use. We suggest you try one",'dnui-delete-not-used-image-wordpress'); ?>
</p>
<h3><?php _e("Are the images actually not being not used?",'dnui-delete-not-used-image-wordpress'); ?></h3>
<p>
    <?php _e("Yes and not, the 'not used' label, tells you that the imageName.imageType (toto.jpg) is not found in any Post/Page/Shortcode, this does not mean that a page generated by a plugin is not using this image and therefore if you delete said image, be aware, that it could be that a plugin is using it.",'dnui-delete-not-used-image-wordpress'); ?>
    <br/>
    <?php _e("To go further:",'dnui-delete-not-used-image-wordpress'); ?>
    <br/>
    <?php _e("So if you have another plugin, for example 'Easy load X' that use the example.jpg in one HTML code or Javascript, if the DNUI plugin can't find any reference at the database, it will return a false 'not used' label",'dnui-delete-not-used-image-wordpress'); ?>

</p>

<h3><?php _e("How to fix the false 'not used' label?",'dnui-delete-not-used-image-wordpress'); ?></h3>
<p>
    <?php _e("This question is a little complex to answer however,",'dnui-delete-not-used-image-wordpress'); ?>
    <br/>
    <?php _e("I built this plugin to help you to fix this problem and thus you do have some options, PLEASE USE THEM:",'dnui-delete-not-used-image-wordpress'); ?>
<ul>
    <li>
        <?php _e("Use the Ignore Size Option, you can select one or more options (use Ctrl+Click-to un/select) to ignore the size's",'dnui-delete-not-used-image-wordpress'); ?>
    </li>
    <li>
        <?php _e("You can dev your own Checker Image[Plugin].php code, and add this to Checkers DNUI (you can send me the code and I will put this in the wordpress.org version)",'dnui-delete-not-used-image-wordpress'); ?>
    </li>
    <li>
        <?php _e("Ask me to do it this plugin compatible with the X Plugin (Only for Pro version)",'dnui-delete-not-used-image-wordpress'); ?>
    </li>
</ul>
</p>
<h3><?php _e("Dropout of your site",'dnui-delete-not-used-image-wordpress'); ?></h3>
<p>
    <?php _e("This plugin use a lots ajax, so the plugin will call several time your server, some server company have special protection against this kind of logic (search about denial-of-service (DoS) attack)",'dnui-delete-not-used-image-wordpress'); ?>
</p>

<script type="text/ng-template" id="errorDnui.html">
    <div class="modal-header">
        <h3 class="modal-title"><?php _e('Error, please see the console or the debug tab', 'dnui') ?></h3>
    </div>
    <div class="modal-body">
        {{messages.exception.message}} <br/>
        {{messages.cause.message}}
    </div>
    <div class="modal-footer">
        <button class="btn btn-warning" type="button" ng-click="cancel()"><?php _e('Cancel', 'dnui') ?></button>
    </div>
</script>