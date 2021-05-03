<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Session;
class Redis {
    private $expire;
    private $cache;

    public function __construct($registry) {
        $this->config = $registry->get('config');
        $this->cache = new \Redis();
        $this->cache->pconnect(CACHE_HOSTNAME, CACHE_PORT);
    }

    public function get($key) {
        $data = $this->cache->get(CACHE_PREFIX . $key);

        return json_decode($data, true);
    }

    public function set($key,$value) {
        $status = $this->cache->set(CACHE_PREFIX . $key, json_encode($value));

        if($status){
            $this->cache->setTimeout(CACHE_PREFIX . $key, $this->expire);
        }

        return $status;
    }

    public function delete($key) {
        $this->cache->delete(CACHE_PREFIX . $key);
    }
}