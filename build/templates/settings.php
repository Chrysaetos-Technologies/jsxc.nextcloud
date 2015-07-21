<div class="section">
	<h2>Owncloud JavaScript Xmpp Client</h2>
	<form id="ojsxc">
		<table style="width: auto">
			<tr>
				<td><label for="boshUrl">* BOSH url</label></td>
				<td><input type="text" name="boshUrl" id="boshUrl" value="<?php p($_['boshUrl']); ?>" /></td>
				<td></td>
			</tr>
			<tr>
				<td><label for="xmppDomain">* XMPP domain</label></td>
				<td><input type="text" name="xmppDomain" id="xmppDomain" value="<?php p($_['xmppDomain']); ?>" /></td>
				<td></td>
			</tr>
			<tr>
				<td><label for="xmppResource">XMPP resource</label></td>
				<td><input type="text" name="xmppResource" id="xmppResource" value="<?php p($_['xmppResource']); ?>" /></td>
				<td></td>
			</tr>
			<tr>
				<td><label for="xmppOverwrite">Allow user to overwrite XMPP settings</label></td>
				<td><input type="checkbox" name="xmppOverwrite" id="xmppOverwrite" value="true" <?php if($_['xmppOverwrite'] === 'true' || $_['xmppOverwrite'] === true) echo "checked"; ?> /></td>
				<td></td>
			</tr>
			<tr>
				<td><label for="xmppStartMinimized">Hide roster after first login</label></td>
				<td><input type="checkbox" name="xmppStartMinimized" id="xmppStartMinimized" value="true" <?php if($_['xmppStartMinimized'] === 'true' || $_['xmppStartMinimized'] === true) echo "checked"; ?> /></td>
				<td></td>
			</tr>
			<tr>
				<td><label for="iceUrl">TURN Url</label></td>
				<td><input type="text" name="iceUrl" id="iceUrl" value="<?php p($_['iceUrl']); ?>" /></td>
				<td></td>
			</tr>
			<tr>
				<td><label for="iceUsername">TURN Username</label></td>
				<td><input type="text" name="iceUsername" id="iceUrl" value="<?php p($_['iceUsername']); ?>" /></td>
				<td><em>If no username is set, TURN-REST-API credentials are used.</em></td>
			</tr>
			<tr>
				<td><label for="iceCredential">TURN Credential</label></td>
				<td><input type="text" name="iceCredential" id="iceCredential" value="<?php p($_['iceCredential']); ?>" /></td>
				<td><em>If no password is set, TURN-REST-API credentials are used.</em></td>
			</tr>
			<tr>
				<td><label for="iceSecret">TURN Secret</label></td>
				<td><input type="text" name="iceSecret" id="iceSecret" value="<?php p($_['iceSecret']); ?>" /></td>
				<td><em>Secret for TURN-REST-API credentials as described <a href="http://tools.ietf.org/html/draft-uberti-behave-turn-rest-00" target="_blank">here</a>.
				</em></td>
			</tr>
			<tr>
				<td><label for="iceTtl">TURN TTL</label></td>
				<td><input type="text" name="iceTtl" id="iceTtl" value="<?php p($_['iceTtl']); ?>" /></td>
				<td><em>Lifetime for TURN-REST-API credentials in seconds.</em></td>
			</tr>
		</table>

		<div class="msg"></div>

		<input type="submit" value="Save settings" />
	</form>
</div>
