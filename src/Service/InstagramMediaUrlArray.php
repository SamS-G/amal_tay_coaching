<?php

    namespace App\Service;

    class InstagramMediaUrlArray
    {
        public function object_to_array($data)
        {
            if (is_array($data) || is_object($data)) {
                $result = [];
                foreach ($data as $key => $value) {
                    $result[$key] = $this->object_to_array($value);
                }
                return $result;
            }
            return $data;
        }
    }
