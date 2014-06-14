<?php

/**
 * @defgroup plugins_generic_subscriptionSSO
 */

/**
 * @file plugins/generic/subscriptionSSO/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file COPYING.
 *
 * @ingroup plugins_generic_subscriptionSSO
 * @brief Wrapper for Subscription SSO plugin.
 *
 */

require_once('SubscriptionSSOPlugin.inc.php');

return new SubscriptionSSOPlugin();

?>
