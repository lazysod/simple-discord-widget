<?php
/**
 * Author: King Fox (https://www.foxtrot-studios.co/)
 */
class discord {

	public $serverId;
	public $data;
	public $channels;
	public $members;

	public function __construct($serverId) {
		$this->serverId = $serverId;
	}

	public function fetch() {
		$url = 'https://discord.com/api/guilds/'.rawurlencode($this->serverId).'/widget.json';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_USERAGENT, 'SimpleDiscordWidget/1.0');
		$response = curl_exec($ch);
		$decoded = $response ? json_decode($response) : null;
		$hasWidgetPayload = is_object($decoded) && isset($decoded->channels) && isset($decoded->members);
		if (!$hasWidgetPayload || isset($decoded->code) || isset($decoded->message) || isset($decoded->guild_id)) {
			$decoded = (object) array(
				'name' => '',
				'instant_invite' => '',
				'channels' => array(),
				'members' => array(),
				'presence_count' => 0
			);
		}
		$this->data = $decoded;
		curl_close($ch);
	}

	public function getInvite() {
		return isset($this->data->instant_invite) ? $this->data->instant_invite : '';
	}

	public function getServerTitle() {
		return isset($this->data->name) ? $this->data->name : '';
	}

	public function getRawData() {
		return $this->data;
	}

	public function getChannels() {
		return isset($this->data->channels) ? $this->data->channels : array();
	}

	public function getMembers() {
		return isset($this->data->members) ? $this->data->members : array();
	}

	public function getMemberCount() {
		return count($this->getMembers());
	}

	public function getMembersInChannel($id) {
		if ($id == null) {
			die('Server Id can not be null.');
		}
		$members = array_filter($this->getMembers(), function($member) use ($id) {
			if (!isset($member->channel_id))
				return false;
			if ($member->channel_id != $id)
				return false;
			if (isset($member->bot))
				return false;
		    return true;
		});
		return $members;
	}

	public function render_channels(){
		$channel_list = $this->getChannels();
		foreach ($channel_list as $channel) {
			$inChannel = $this->getMembersInChannel($channel->id);
			echo '- '.$channel->name.'<br>';
			foreach($inChannel as $member) {
			  echo '--- '.$member->username.'<br>';  
			}
		}		
	}

}
?>