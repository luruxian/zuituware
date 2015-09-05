<?php include template("manage_header");?>

<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="partner">
	<div class="dashboard" id="dashboard">
		<ul><?php echo mcurrent_system('skin'); ?></ul>
	</div>
	<div id="content" class="clear mainwide">
        <div class="clear box">
            <div class="box-top"></div>
            <div class="box-content">
                <div class="head"><h2>系统皮肤</h2></div>
                <div class="sect">
                    <form method="post">
                        <div class="field">
                            <label>模板切换</label>
							<select name="skin[template]" class="f-input" style="width:200px;"><?php echo Utility::Option(ZSystem::GetTemplateList(), $INI['skin']['template']); ?></select>
							<span class="hint">模板安装于 [<?php echo DIR_ROOT; ?>/template] 目录下，仅默认模板支持多主题切换</span>
                        </div>
                        <div class="field">
                            <label>主题切换</label>
							<select name="skin[theme]" class="f-input" style="width:200px;"><?php echo Utility::Option(ZSystem::GetThemeList(), $INI['skin']['theme']); ?></select>
							<span class="hint">主题安装于 [<?php echo WWW_ROOT; ?>/static/theme] 目录下，仅默认模板支持多主题切换</span>
                        </div>
                        <div class="act">
                            <input type="submit" value="保存" name="commit" class="formbutton"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box-bottom"></div>
        </div>
	</div>

<div id="sidebar">
</div>

</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("manage_footer");?>
