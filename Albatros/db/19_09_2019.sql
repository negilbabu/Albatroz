-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2019 at 01:31 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carphotos`
--

CREATE TABLE `tbl_carphotos` (
  `photo_id` int(11) NOT NULL auto_increment,
  `submodel_id` int(11) NOT NULL,
  `photo_name` varchar(1000) NOT NULL,
  PRIMARY KEY  (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_carphotos`
--

INSERT INTO `tbl_carphotos` (`photo_id`, `submodel_id`, `photo_name`) VALUES
(1, 2, 'PUBG-Tournament-Flyer-PSD-Template.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL auto_increment,
  `district_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(6, 'THIRUVANATHAPURAM'),
(8, 'KOLLAM'),
(9, 'PATHANAMTHITTA'),
(10, 'idukki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_models`
--

CREATE TABLE `tbl_models` (
  `model_id` int(11) NOT NULL auto_increment,
  `model_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_models`
--

INSERT INTO `tbl_models` (`model_id`, `model_name`) VALUES
(3, 'HUNDAI i20'),
(4, 'hundai i10'),
(5, 'hundai creta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `district_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL auto_increment,
  `place_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`district_id`, `place_id`, `place_name`) VALUES
(0, 5, 'VIZHINJAM'),
(0, 6, 'VIZHINJAM'),
(6, 8, 'VIZHINJAM'),
(10, 9, 'munnar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_booking`
--

CREATE TABLE `tbl_service_booking` (
  `service_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `submodel_id` int(11) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `km_status` varchar(50) NOT NULL,
  `service_date` date NOT NULL,
  `service_status` varchar(50) NOT NULL default 'Booked',
  PRIMARY KEY  (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_service_booking`
--

INSERT INTO `tbl_service_booking` (`service_id`, `user_id`, `submodel_id`, `showroom_id`, `vehicle_no`, `km_status`, `service_date`, `service_status`) VALUES
(1, 3, 2, 4, '5564', '2000', '2019-09-08', 'Delivered'),
(2, 0, 2, 4, '5564', '22', '2019-09-17', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_showroom_reg`
--

CREATE TABLE `tbl_showroom_reg` (
  `showroom_id` int(11) NOT NULL auto_increment,
  `showroom_name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `place_id` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service_availability` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `showroom_proof` varchar(100) NOT NULL,
  `proof_no` varchar(100) NOT NULL,
  `status` int(11) NOT NULL default '0',
  PRIMARY KEY  (`showroom_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_showroom_reg`
--

INSERT INTO `tbl_showroom_reg` (`showroom_id`, `showroom_name`, `address`, `place_id`, `contact`, `email`, `service_availability`, `user_name`, `password`, `showroom_proof`, `proof_no`, `status`) VALUES
(1, 'efrewf', 'fwegwe', 8, '6454564', 'fdsffwe', '', 'fwfwe', '2323', 'vlcsnap-2018-07-16-21h08m57s852.png', '32349954', 1),
(3, 'sdfsdf', 'fjhgjkl', 8, '31321321', 'fdg@jhkj.bvn', '', 'jhlkj', 'kklko', 'pug_dog_muzzle_135216_3840x2160.jpg', '465454', 2),
(4, 'popular', 'pkklkl', 9, '9745330873', 'fdg@jhkj.bvn', 'Yes', 'kkk', 'm', 'DSC01686.JPG', '5544545', 1),
(5, 'sdfsdf', 'hhhhh', 8, '3321231', 'negil@gmail.com', 'Yes', 'nb', '1234', 'received_436300219890770.jpeg', '222', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spec`
--

CREATE TABLE `tbl_spec` (
  `spec_id` int(11) NOT NULL auto_increment,
  `submodel_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `insurance` varchar(100) NOT NULL,
  `avg_service_cost` varchar(100) NOT NULL,
  `engine_type` varchar(100) NOT NULL,
  `displacement` varchar(100) NOT NULL,
  `max_power` varchar(100) NOT NULL,
  `max_torque` varchar(100) NOT NULL,
  `fuel_supply_system` varchar(100) NOT NULL,
  `transmission_type` varchar(100) NOT NULL,
  `gear_box` varchar(100) NOT NULL,
  `drive_type` varchar(100) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `mileage` varchar(100) NOT NULL,
  `fuel_tank_capacity` varchar(100) NOT NULL,
  `top_speed` varchar(100) NOT NULL,
  `front_suspension` varchar(100) NOT NULL,
  `rear_suspension` varchar(100) NOT NULL,
  `shock_absorber_type` varchar(100) NOT NULL,
  `stearing_type` varchar(100) NOT NULL,
  `front_brake_type` varchar(100) NOT NULL,
  `rear_break_type` varchar(100) NOT NULL,
  `acceleration` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `boot_space` varchar(100) NOT NULL,
  `seating_capacity` varchar(100) NOT NULL,
  `ground_clearence` varchar(100) NOT NULL,
  `wheel_base` varchar(100) NOT NULL,
  `no_of_doors` varchar(50) NOT NULL,
  `body_type` varchar(50) NOT NULL,
  `power_steering` varchar(50) NOT NULL,
  `power_window_front` varchar(50) NOT NULL,
  `power_window_rear` varchar(50) NOT NULL,
  `auto_cimate_ctrl` varchar(50) NOT NULL,
  `air_quality_ctrl` varchar(50) NOT NULL,
  `remote_trunk_opener` varchar(50) NOT NULL,
  `remote_fuel_lid_opener` varchar(50) NOT NULL,
  `low_fuel_warning_light` varchar(50) NOT NULL,
  `accessory_power_outlet` varchar(50) NOT NULL,
  `trunk_light` varchar(50) NOT NULL,
  `vanity_mirror` varchar(50) NOT NULL,
  `front_arm_rest` varchar(50) NOT NULL,
  `rear_arm_rest` varchar(50) NOT NULL,
  `seat_belt` varchar(50) NOT NULL,
  `cup_holder_front` varchar(50) NOT NULL,
  `cup_holder_rear` varchar(50) NOT NULL,
  `rear_ac_vents` varchar(50) NOT NULL,
  `heated_seat_front` varchar(50) NOT NULL,
  `heated_seat_rear` varchar(50) NOT NULL,
  `seat_lumbar_support` varchar(50) NOT NULL,
  `multifunction_steering_wheel` varchar(50) NOT NULL,
  `cruise_ctrl` varchar(50) NOT NULL,
  `parking_sensors` varchar(50) NOT NULL,
  `navigation_system` varchar(50) NOT NULL,
  `foldable_rear_seat` varchar(50) NOT NULL,
  `bench_folding` varchar(50) NOT NULL,
  `engine_start_stop_button` varchar(50) NOT NULL,
  `glove_box_cooling` varchar(50) NOT NULL,
  `bottle_holder` varchar(50) NOT NULL,
  `voice_ctrl` varchar(50) NOT NULL,
  `usb_charger` varchar(50) NOT NULL,
  `steering_mounted_tripmeter` varchar(50) NOT NULL,
  `gear_shift_indicator` varchar(50) NOT NULL,
  `lane_change_indicator` varchar(50) NOT NULL,
  `clutch_footrest` varchar(50) NOT NULL,
  `ac` varchar(50) NOT NULL,
  `heater` varchar(50) NOT NULL,
  `adjustable_steering` varchar(50) NOT NULL,
  `keyless_entry` varchar(50) NOT NULL,
  `tachometer` varchar(50) NOT NULL,
  `e_multi_tripmeter` varchar(50) NOT NULL,
  `digital_cloack` varchar(50) NOT NULL,
  `e_adjustable_seat` varchar(50) NOT NULL,
  `adjustable_headlight` varchar(50) NOT NULL,
  `fog_lights_front` varchar(50) NOT NULL,
  `fog_lights_rear` varchar(50) NOT NULL,
  `power_mirror_adjust` varchar(50) NOT NULL,
  `manual_mirror_adjust` varchar(50) NOT NULL,
  `electric_mirror_adjust` varchar(50) NOT NULL,
  `wiper` varchar(50) NOT NULL,
  `window_washer` varchar(50) NOT NULL,
  `wheel_cover` varchar(50) NOT NULL,
  `alloy_wheel_size` varchar(50) NOT NULL,
  `roof_carrier` varchar(50) NOT NULL,
  `sun_roof` varchar(50) NOT NULL,
  `side_stepper` varchar(50) NOT NULL,
  `smoke_headlamp` varchar(50) NOT NULL,
  `trunk_opener` varchar(50) NOT NULL,
  `tyre_type` varchar(50) NOT NULL,
  `wheel_size` varchar(50) NOT NULL,
  `anti_lock_braking` varchar(50) NOT NULL,
  `brake_assist` varchar(50) NOT NULL,
  `central_locking` varchar(50) NOT NULL,
  `power_door_locking` varchar(50) NOT NULL,
  `child_lock` varchar(50) NOT NULL,
  `anti_theft_alarm` varchar(50) NOT NULL,
  `airbag` varchar(50) NOT NULL,
  `headlamps` varchar(50) NOT NULL,
  `seat_belt_warning` varchar(50) NOT NULL,
  `door_ajar_warning` varchar(50) NOT NULL,
  `impact_beam` varchar(50) NOT NULL,
  `tyre_pressure_monitor` varchar(50) NOT NULL,
  `crash_sensor` varchar(50) NOT NULL,
  `clutch_lock` varchar(50) NOT NULL,
  `rear_camera` varchar(50) NOT NULL,
  `anti_theft_device` varchar(50) NOT NULL,
  `hill_assist` varchar(50) NOT NULL,
  `360_view_camera` varchar(50) NOT NULL,
  `dvd_player` varchar(50) NOT NULL,
  `radio` varchar(50) NOT NULL,
  `adio_system_remote_ctrl` varchar(50) NOT NULL,
  `speakers` varchar(50) NOT NULL,
  `bluetooth` varchar(50) NOT NULL,
  `touch_screen` varchar(50) NOT NULL,
  `internal_storage` varchar(50) NOT NULL,
  `no_of_speakers` varchar(50) NOT NULL,
  PRIMARY KEY  (`spec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_spec`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_specs`
--

CREATE TABLE `tbl_specs` (
  `spec_id` int(11) NOT NULL auto_increment,
  `submodel_id` int(11) NOT NULL,
  `body_type` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `avg_service_cost` varchar(50) NOT NULL,
  `engine_type` varchar(50) NOT NULL,
  `displacement` varchar(50) NOT NULL,
  `max_power` varchar(50) NOT NULL,
  `max_torque` varchar(50) NOT NULL,
  `fuel_supply_system` varchar(50) NOT NULL,
  `transmission_type` varchar(50) NOT NULL,
  `gear_box` varchar(50) NOT NULL,
  `drive_type` varchar(50) NOT NULL,
  `length` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `boot_space` varchar(50) NOT NULL,
  `seat_capacity` varchar(50) NOT NULL,
  `ground_clearence` varchar(50) NOT NULL,
  `wheel_base` varchar(50) NOT NULL,
  `no_of_doors` varchar(50) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `mileage` varchar(50) NOT NULL,
  `fuel_tank_capacity` varchar(50) NOT NULL,
  `top_speed` varchar(50) NOT NULL,
  `front_suspension` varchar(50) NOT NULL,
  `rear_suspension` varchar(50) NOT NULL,
  `shock_absorber_type` varchar(50) NOT NULL,
  `steering_type` varchar(50) NOT NULL,
  `front_brake_type` varchar(50) NOT NULL,
  `rear_brake_type` varchar(50) NOT NULL,
  `acceleration` varchar(50) NOT NULL,
  PRIMARY KEY  (`spec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_specs`
--

INSERT INTO `tbl_specs` (`spec_id`, `submodel_id`, `body_type`, `price`, `color`, `insurance`, `avg_service_cost`, `engine_type`, `displacement`, `max_power`, `max_torque`, `fuel_supply_system`, `transmission_type`, `gear_box`, `drive_type`, `length`, `width`, `height`, `boot_space`, `seat_capacity`, `ground_clearence`, `wheel_base`, `no_of_doors`, `fuel_type`, `mileage`, `fuel_tank_capacity`, `top_speed`, `front_suspension`, `rear_suspension`, `shock_absorber_type`, `steering_type`, `front_brake_type`, `rear_brake_type`, `acceleration`) VALUES
(1, 2, 'ad', 'ada', '1221', '3', '', '', 'kjlk', 'jlkj', 'ljl', 'khjk', 'jklj', 'joj', 'jk', '', '21', '11', '44', '11', '12', '2', '', 'sdff', '', '', '200', 'fa', 'dsf', 'fsd', 'ff', 'fsfef', 'ffwf', ''),
(2, 4, 'jj', '1000000', 'red', '2000', '3000', 'hp', '20', '300', '200', 'car', 'auto', '5', 'auto', '', '2', '4', '500', '5', '1', '3', '5', 'petrol', '', '', '300', 'ya', 'ya', 'ff', 'pow', 'shock', 'disk', ''),
(3, 4, 'ad', '1000000', 'red', '2000', '3000', 'hp', 'kjlk', 'jlkj', '200', 'car', 'jklj', 'joj', 'auto', '', '2', '4', '44', '5', '1', '2', '5', 'petrol', '30', 'txttankcapacity', '200', 'fa', 'dsf', 'ff', 'pow', 'fsfef', 'ffwf', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submodel`
--

CREATE TABLE `tbl_submodel` (
  `submodel_id` int(11) NOT NULL auto_increment,
  `model_id` int(11) NOT NULL,
  `submodel_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`submodel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_submodel`
--

INSERT INTO `tbl_submodel` (`submodel_id`, `model_id`, `submodel_name`) VALUES
(2, 3, 'Sportz'),
(4, 4, 'sportz'),
(5, 5, 'lxi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_reg`
--

CREATE TABLE `tbl_user_reg` (
  `user_id` int(11) NOT NULL auto_increment,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `place_id` int(11) NOT NULL,
  `id_proof` varchar(500) NOT NULL,
  `proof_no` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_user_reg`
--

INSERT INTO `tbl_user_reg` (`user_id`, `fname`, `lname`, `address`, `place_id`, `id_proof`, `proof_no`, `contact`, `email`, `dob`, `uname`, `password`, `status`) VALUES
(1, 'sree', 'hari', 'bpc', 8, '', '111111', '9745330873', 'sreehari@gmail.com', '2019-07-03', 'gjkhl', '1234', 1),
(2, 'fdhg', 'jhkjh', 'kjkhk', 8, 'vlcsnap-2018-07-16-21h09m13s069.png', '143543', '3221321321', 'sadsasadasf', '2019-07-10', 'gjkhl', '1234', 1),
(3, 'negil', 'babu', 'bpc', 9, 'IMG_7517.JPG-01.jpeg', '4444', '0614098858', 'negil@gmail.com', '1999-09-20', 'negil', 'negil', 1),
(4, 'fdhg', 'jhkjh', 'kjkhk', 8, 'IMG_7409.JPG-01.jpeg', '1435432313', '3321231', 'fdg@jhkj.bvnb', '2019-07-03', 'qwerty', '123', 2),
(5, 'fdhg', 'hari', 'kjkhk', 8, '_DSC0285-01.jpeg', '143543', '3221321321', 'fdg@jhkj.bvn', '2019-07-03', '1234', '1234', 1);
