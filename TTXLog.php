<?php
// This Class file has lots of methods' code chunks removed for preview to give you idea of how the library is written.
// Doesn't require any special requirements
// See example.php for example usage
class XLog
{
    private $HEX_CHAR = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];

    public function __construct()
    {
        /// CHUNK REMOVED FOR PREVIEW
    }

    public function decode($decode)
    {
        $decode = $this->bytearray($decode);
        $resultLen    = 0;
        /// CHUNK REMOVED FOR PREVIEW
    }

    public function decodeHex($hex)
    {
        $decode = hex2bin($hex);
        return $this->decode($decode);
    }

    public function encode($input)
    {
        $inputStart = $this->changeLongArrayTobytes($this->bytearray($input));
        $sourceLen  = count($inputStart);
        /// CHUNK REMOVED FOR PREVIEW
        return $this->bytearray_decode($bytes1);
    }

    /// CODE CHUNK REMOVED FOR PREVIEW


    private function bytearray($string)
    {
        return array_values(unpack('C*', $string));
    }

    private function bytearray_decode($byteArray)
    {
        $chars = array_map('chr', $byteArray);
        return join($chars);
    }

    private function bytesToHexFun($bytes)
    {
        $buf   = array_fill(0, count($bytes) * 2, ' ');
        $a     = 0;
        $index = 0;
        foreach ($bytes as $b) {
            if ($b < 0) {
                $a = 256 + $b;
            } else {
                $a = $b;
            }
            $buf[$index++] = $this->HEX_CHAR[(int) ($a / 16)];
            $buf[$index++] = $this->HEX_CHAR[$a % 16];
        }
        return join('', $buf);
    }

    private function calculate($input, $times)
    {
        if (strlen($input) != 16) {
            return '';
        }
        /// CHUNK REMOVED FOR PREVIEW

    }

    private function calculateRev($input, $times)
    {
        $r12  = 0;
        /// CHUNK REMOVED FOR PREVIEW

    }

    private function changeLongArrayTobytes($arrays)
    {
        $result = [];
        for (
            $i = 0;
            $i < count($arrays);
            $i++
        ) {
            if ($arrays[$i] > 127) {
                $result[$i] = $arrays[$i] - 256;
            } else {
                $result[$i] = $arrays[$i];
            }
        }
        return $result;
    }

    private function changeToLongArray($bytes)
    {
        $result = [];
        for (
            $i = 0;
            $i < count($bytes);
            $i++
        ) {
            if ($bytes[$i] < 0) {
                $result[$i] = $bytes[$i] + 256;
            } else {
                $result[$i] = $bytes[$i];
            }
        }
        return $result;
    }
    /// CHUNK REMOVED FOR PREVIEW

    private function getHandleCount($hex)
    {
        /// CHUNK REMOVED FOR PREVIEW

    }

    private function getShifting($point)
    {
        /// CHUNK REMOVED FOR PREVIEW

    }

    private function getUmullHigh($r0, $r2)
    {
        /// CHUNK REMOVED FOR PREVIEW

    }

    private function hexToByteArray($inHex)
    {
        /// CHUNK REMOVED FOR PREVIEW

    }

    private function makeSafe($num)
    {
        /// CHUNK REMOVED FOR PREVIEW

    }

    private function parseLong($str, $radix = 10)
    {
        return (int) base_convert($str, $radix, 10);
    }

    private function reverse($hex)
    {
        /// CHUNK REMOVED FOR PREVIEW
    }

    private function signed2unsigned($num)
    {
        /// CHUNK REMOVED FOR PREVIEW
    }

    private function stablizeHex($val)
    {
        /// CHUNK REMOVED FOR PREVIEW
    }

    private function stablizieBinary($val)
    {
        /// CHUNK REMOVED FOR PREVIEW
    }

    private function toHexString($hex)
    {
        return dechex($hex);
    }

    private function unsignedRightShift($a, $b)
    {
        /// CHUNK REMOVED FOR PREVIEW

    }
}
