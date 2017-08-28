<?php
namespace BassamNab\LaravelArabicSlug;

class ArabicStrTest 
{
    public function testArabicStr($slug)
    {
        return ArabicStr::slug($slug);
    }
}
