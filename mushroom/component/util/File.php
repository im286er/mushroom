<?php
/**
 * Mushroom
 * 
 * An open source php application framework for PHP 5.3.0 or newer
 *
 * @author    mengfk <Mushroom Dev Team>
 * @copyright Copyright (C) 2014 <MrsLab Team> All rights reserved.
 * @license   http://www.apache.org/licenses/LICENSE-2.0.txt
 * @link      https://github.com/mrslab/mushroom
 */

namespace mushroom\component\util;

class File {

    public function mkdir($path) {
        $dir = $path;
        if(!is_dir($dir)) {
            if(!mkdir($dir, 0755, true)) {
                throw new \Exception('"{$dir}" directory create failed');
            }
        }
        return true;
    }

    public function read($file) {
        if (is_file($file)) {
            $data = file_get_contents($file);
        } else {
            $data = false;
        }
        return $data;
    }

    public function write($file, $data, $file_append = false) {
        if (true === $this->mkdir(dirname($file))) {
            if (false === file_put_contents($file, $data, $file_append ? FILE_APPEND : 0)) {
                throw new \Exception('file "'.$file.'" write failed');
            }
        }
        return true;
    }

    public function delete($file) {
        try {
            if (!is_file($file)) {
                return false;
            }
            return unlink($file);
        } catch (\Exception $e) {
            $e->getExceptionMessage();
        }
    }
}
