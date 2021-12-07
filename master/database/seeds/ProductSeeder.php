<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'name' => "ROG Flow X13",
            'price' => 25499000,
            'disc' => 2,
            'description' => "Cool",
            'interfaces' => 
            "<ul>
            <li>1x 3.5mm Combo Audio Jack
            <li>1x HDMI 2.0b</li>
            <li>1x USB 3.2 Gen 2 Type-A</li>
            <li>2x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery</li>
            <li>1x ROG XG Mobile Interface</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "AMD Ryzen™ 9 5900HS Processor 3.1 GHz (16M Cache, up to 4.5 GHz)",
            'display' => '13,4" FHD (1920x1080) 16:10 IPS-Level 100% SRGB, 72% NTSC, 120Hz Touch Screen',

            'ram' => "16GB LPDDR4X",
            'ssd' => "512GB M.2 2230 NVMe™ PCIe® 3.0 SSD",
            
            'keyboard' => "Backlit chicklet keyboard",
            'camera' => "720P HD camera",
            'wifi' => "Intel Wi-Fi 6(Gig+)(802.11ax)+Bluetooth 5.1 (Dual band) 2*2",
            'speaker' => "2x 1W speaker with smart AMP technology",

            'weight' => "1,6Kg",
            'slug' => "rog-flow-x13",
            'main_image' => "ROGFLOWX13.jpg",
            'brand_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'name' => "TUF FX505",
            'price' => 14999000,
            'disc' => 1,
            'description' => "ASUS TUF GAMING F15 FX506LH-I765B6T i7-10750H 8GB 512GB GTX1650 W10",
            'interfaces' => 
            "<ul>
            <li>1 x COMBO audio jack</li>
            <li>2 x Type-A USB 3.2 (Gen 1)</li>
            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>
            <li>1 x Type-A USB2.0</li>
            <li>1 x RJ45 LAN jack for LAN insert</li>
            <li>1 x HDMI, HDMI support 2.0b</li>
            <li>1 x AC adapter plug</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)",
            'display' => '15.6" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB',

            'ram' => "8 GB DDR4 3200Mhz",
            'ssd' => "512GB M.2 NVMeâ¢ PCIe® 3.0 SSD",
            
            'keyboard' => "S\Chiclet keyboard with isolated numpad key",
            'camera' => "HD 720p CMOS module",
            'wifi' => "Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0",
            'speaker' => "DTS:X® Ultra",

            'weight' => "2,25Kg",
            'slug' => "tuf-fx505",
            'main_image' => "TUFFX505.jpg",
            'brand_id' => 1,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'name' => "ASUS V13",
            'price' => 14999000,
            'disc' => 1,
            'description' => "ASUS V13 512GB GTX1650 W10",
            'interfaces' => 
            "<ul>
            <li>1 x COMBO audio jack</li>
            <li>2 x Type-A USB 3.2 (Gen 1)</li>
            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>
            <li>1 x Type-A USB2.0</li>
            <li>1 x RJ45 LAN jack for LAN insert</li>
            <li>1 x HDMI, HDMI support 2.0b</li>
            <li>1 x AC adapter plug</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)",
            'display' => '15.6" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB',

            'ram' => "8 GB DDR4 3200Mhz",
            'ssd' => "512GB M.2 NVMeâ¢ PCIe® 3.0 SSD",
            
            'keyboard' => "S\Chiclet keyboard with isolated numpad key",
            'camera' => "HD 720p CMOS module",
            'wifi' => "Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0",
            'speaker' => "DTS:X® Ultra",

            'weight' => "2,25Kg",
            'slug' => "asus-v13",
            'main_image' => "ASUSV13.jpg",
            'brand_id' => 1,
            'category_id' => 3,
        ]);
        
        DB::table('products')->insert([
            'id' => 4,
            'name' => "RAD 502",
            'price' => 10499000,
            'disc' => 2,
            'description' => "ZERO ZERO ONE",
            'interfaces' => 
            "<ul>
            <li>1 x COMBO audio jack</li>
            <li>2 x Type-A USB 3.2 (Gen 1)</li>
            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>
            <li>1 x Type-A USB2.0</li>
            <li>1 x RJ45 LAN jack for LAN insert</li>
            <li>1 x HDMI, HDMI support 2.0b</li>
            <li>1 x AC adapter plug</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)",
            'display' => '15.6" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB',

            'ram' => "8 GB DDR4 3200Mhz",
            'ssd' => "512GB M.2 NVMeâ¢ PCIe® 3.0 SSD",
            
            'keyboard' => "S\Chiclet keyboard with isolated numpad key",
            'camera' => "HD 720p CMOS module",
            'wifi' => "Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0",
            'speaker' => "DTS:X® Ultra",

            'weight' => "2,25Kg",
            'slug' => "rad-502",
            'main_image' => "RAD502.jpg",
            'brand_id' => 2,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'id' => 5,
            'name' => "DELL B-Suite",
            'price' => 10200000,
            'disc' => 2,
            'description' => "Business Maximum",
            'interfaces' => 
            "<ul>
            <li>1 x COMBO audio jack</li>
            <li>2 x Type-A USB 3.2 (Gen 1)</li>
            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>
            <li>1 x Type-A USB2.0</li>
            <li>1 x RJ45 LAN jack for LAN insert</li>
            <li>1 x HDMI, HDMI support 2.0b</li>
            <li>1 x AC adapter plug</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)",
            'display' => '15.6" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB',

            'ram' => "8 GB DDR4 3200Mhz",
            'ssd' => "512GB M.2 NVMeâ¢ PCIe® 3.0 SSD",
            
            'keyboard' => "S\Chiclet keyboard with isolated numpad key",
            'camera' => "HD 720p CMOS module",
            'wifi' => "Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0",
            'speaker' => "DTS:X® Ultra",

            'weight' => "2,25Kg",
            'slug' => "dell-b-suite",
            'main_image' => "DELLBSUITE.jpg",
            'brand_id' => 2,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 6,
            'name' => "DELL V10",
            'price' => 6000000,
            'disc' => 1,
            'description' => "Video With No Limit",
            'interfaces' => 
            "<ul>
            <li>1 x COMBO audio jack</li>
            <li>2 x Type-A USB 3.2 (Gen 1)</li>
            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>
            <li>1 x Type-A USB2.0</li>
            <li>1 x RJ45 LAN jack for LAN insert</li>
            <li>1 x HDMI, HDMI support 2.0b</li>
            <li>1 x AC adapter plug</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)",
            'display' => '15.6" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB',

            'ram' => "8 GB DDR4 3200Mhz",
            'ssd' => "512GB M.2 NVMeâ¢ PCIe® 3.0 SSD",
            
            'keyboard' => "S\Chiclet keyboard with isolated numpad key",
            'camera' => "HD 720p CMOS module",
            'wifi' => "Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0",
            'speaker' => "DTS:X® Ultra",

            'weight' => "2,25Kg",
            'slug' => "dell-v10",
            'main_image' => "DELLV10.jpg",
            'brand_id' => 2,
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'id' => 7,
            'name' => "Lenovo Gaming",
            'price' => 6000000,
            'disc' => 1,
            'description' => "Gaming With No Limit",
            'interfaces' => 
            "<ul>
            <li>1 x COMBO audio jack</li>
            <li>2 x Type-A USB 3.2 (Gen 1)</li>
            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>
            <li>1 x Type-A USB2.0</li>
            <li>1 x RJ45 LAN jack for LAN insert</li>
            <li>1 x HDMI, HDMI support 2.0b</li>
            <li>1 x AC adapter plug</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)",
            'display' => '15.6" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB',

            'ram' => "8 GB DDR4 3200Mhz",
            'ssd' => "512GB M.2 NVMeâ¢ PCIe® 3.0 SSD",
            
            'keyboard' => "S\Chiclet keyboard with isolated numpad key",
            'camera' => "HD 720p CMOS module",
            'wifi' => "Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0",
            'speaker' => "DTS:X® Ultra",

            'weight' => "2,25Kg",
            'slug' => "lenovo-gaming",
            'main_image' => "LEVONOGAMING.jpg",
            'brand_id' => 3,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 8,
            'name' => "Lenovo Business",
            'price' => 10000000,
            'disc' => 1,
            'description' => "Business Limitless",
            'interfaces' => 
            "<ul>
            <li>1 x COMBO audio jack</li>
            <li>2 x Type-A USB 3.2 (Gen 1)</li>
            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>
            <li>1 x Type-A USB2.0</li>
            <li>1 x RJ45 LAN jack for LAN insert</li>
            <li>1 x HDMI, HDMI support 2.0b</li>
            <li>1 x AC adapter plug</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)",
            'display' => '15.6" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB',

            'ram' => "8 GB DDR4 3200Mhz",
            'ssd' => "512GB M.2 NVMeâ¢ PCIe® 3.0 SSD",
            
            'keyboard' => "S\Chiclet keyboard with isolated numpad key",
            'camera' => "HD 720p CMOS module",
            'wifi' => "Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0",
            'speaker' => "DTS:X® Ultra",

            'weight' => "2,25Kg",
            'slug' => "lenovo-business",
            'main_image' => "LENOVOBUSINESS.jpg",
            'brand_id' => 3,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 9,
            'name' => "Lenovo V99",
            'price' => 6000000,
            'disc' => 1,
            'description' => "Video Limitless",
            'interfaces' => 
            "<ul>
            <li>1 x COMBO audio jack</li>
            <li>2 x Type-A USB 3.2 (Gen 1)</li>
            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>
            <li>1 x Type-A USB2.0</li>
            <li>1 x RJ45 LAN jack for LAN insert</li>
            <li>1 x HDMI, HDMI support 2.0b</li>
            <li>1 x AC adapter plug</li>
            <ul>",

            'graphics_card' => "NNVIDIA® GeForce® RTX3050 4GB GDDR6",
            'processor' => "Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)",
            'display' => '15.6" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB',

            'ram' => "8 GB DDR4 3200Mhz",
            'ssd' => "512GB M.2 NVMeâ¢ PCIe® 3.0 SSD",
            
            'keyboard' => "S\Chiclet keyboard with isolated numpad key",
            'camera' => "HD 720p CMOS module",
            'wifi' => "Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0",
            'speaker' => "DTS:X® Ultra",

            'weight' => "2,25Kg",
            'slug' => "lenovo-v99",
            'main_image' => "LENOVOV99.jpg",
            'brand_id' => 3,
            'category_id' => 3,
        ]);
    }
}
