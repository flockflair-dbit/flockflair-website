<?php
// Repository Update
shell_exec('/usr/local/cpanel/bin/uapi VersionControl update name=flockflair-website repository_root=/home/dbithost/public_html/flockflair branch=master source_repository=\'{"remote_name":"origin"}\'
');
// Deploy
shell_exec('/usr/local/cpanel/bin/uapi VersionControlDeployment create repository_root=/home/dbithost/public_html/flockflair');
echo "done";
?>