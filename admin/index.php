<?php

require_once '../../../mainfile.php';
require_once XOOPS_ROOT_PATH . '/header.php';

redirect_header(XOOPS_MODULE_URL . '/legacy/admin/index.php?action=Help&amp;dirname=sitemap', 1, _MI_SITEMAP_NAME);

require_once XOOPS_ROOT_PATH . '/footer.php';
