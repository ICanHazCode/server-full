<?php

# ***** BEGIN LICENSE BLOCK *****
# Version: MPL 1.1/GPL 2.0/LGPL 2.1
#
# The contents of this file are subject to the Mozilla Public License Version
# 1.1 (the "License"); you may not use this file except in compliance with
# the License. You may obtain a copy of the License at
# http://www.mozilla.org/MPL/
#
# Software distributed under the License is distributed on an "AS IS" basis,
# WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
# for the specific language governing rights and limitations under the
# License.
#
# The Original Code is Weave Basic Object Server
#
# The Initial Developer of the Original Code is
# Mozilla Labs.
# Portions created by the Initial Developer are Copyright (C) 2010
# the Initial Developer. All Rights Reserved.
#
# Contributor(s):
#	Toby Elliott (telliott@mozilla.com)
#
# Alternatively, the contents of this file may be used under the terms of
# either the GNU General Public License Version 2 or later (the "GPL"), or
# the GNU Lesser General Public License Version 2.1 or later (the "LGPL"),
# in which case the provisions of the GPL or the LGPL are applicable instead
# of those above. If you wish to allow use of your version of this file only
# under the terms of either the GPL or the LGPL, and not to allow others to
# use your version of this file under the terms of the MPL, indicate your
# decision by deleting the provisions above and replace them with the notice
# and other provisions required by the GPL or the LGPL. If you do not delete
# the provisions above, a recipient may use your version of this file under
# the terms of any one of the MPL, the GPL or the LGPL.
#
# ***** END LICENSE BLOCK *****
	

interface WeaveStorageBase
{
	function __construct($username);

	function open_connection();

	function get_connection();
	
	function begin_transaction();

	function commit_transaction();

	function get_max_timestamp($collection);
	
	function get_collection_list();
	
	function get_collection_list_with_timestamps();

	function get_collection_list_with_counts();

	function store_object(&$wbos);
	
	function delete_object($collection, $id);
	
	function delete_objects($collection, $id = null, $parentid = null, $predecessorid = null, $newer = null, $older = null, $limit = null, $offset = null);
	
	function retrieve_object($collection, $id);
	
	function retrieve_objects($collection, $id = null, $full = null, $direct_output = null, $parentid = null, $newer = null, $older = null, $limit = null, $offset = null);

	function get_storage_total();

	function create_user();

	function delete_user();

	function heartbeat();
}

?>