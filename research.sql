-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2018 at 12:01 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `researcher_name` text COLLATE utf8mb4_unicode_ci,
  `governorate` text COLLATE utf8mb4_unicode_ci,
  `city` text COLLATE utf8mb4_unicode_ci,
  `district` text COLLATE utf8mb4_unicode_ci,
  `following` text COLLATE utf8mb4_unicode_ci,
  `real_date` date DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `age` text COLLATE utf8mb4_unicode_ci,
  `national_id` text COLLATE utf8mb4_unicode_ci,
  `relationship_status` text COLLATE utf8mb4_unicode_ci,
  `education_status` text COLLATE utf8mb4_unicode_ci,
  `work_status` text COLLATE utf8mb4_unicode_ci,
  `profession` text COLLATE utf8mb4_unicode_ci,
  `national_id_front` text COLLATE utf8mb4_unicode_ci,
  `national_id_back` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `is_ill` text COLLATE utf8mb4_unicode_ci,
  `illness_type` text COLLATE utf8mb4_unicode_ci,
  `illness_description` text COLLATE utf8mb4_unicode_ci,
  `illness_prevent_movement` text COLLATE utf8mb4_unicode_ci,
  `need_monthly_treatment` text COLLATE utf8mb4_unicode_ci,
  `has_national_support` text COLLATE utf8mb4_unicode_ci,
  `treatment_monthly_amount` text COLLATE utf8mb4_unicode_ci,
  `treatment_affordable` text COLLATE utf8mb4_unicode_ci,
  `need_operation` text COLLATE utf8mb4_unicode_ci,
  `income_amount` text COLLATE utf8mb4_unicode_ci,
  `income_amount_category` text COLLATE utf8mb4_unicode_ci,
  `income_source_count` text COLLATE utf8mb4_unicode_ci,
  `support_count` text COLLATE utf8mb4_unicode_ci,
  `debts_total` text COLLATE utf8mb4_unicode_ci,
  `debts_total_range` text COLLATE utf8mb4_unicode_ci,
  `expenses_house_rent` text COLLATE utf8mb4_unicode_ci,
  `expenses_farm_rent` text COLLATE utf8mb4_unicode_ci,
  `expenses_treatment` text COLLATE utf8mb4_unicode_ci,
  `expenses_detergent` text COLLATE utf8mb4_unicode_ci,
  `expenses_school_subscription` text COLLATE utf8mb4_unicode_ci,
  `expenses_child_course` text COLLATE utf8mb4_unicode_ci,
  `expenses_water_receipt` text COLLATE utf8mb4_unicode_ci,
  `expenses_electricity_receipt` text COLLATE utf8mb4_unicode_ci,
  `expenses_clothes` text COLLATE utf8mb4_unicode_ci,
  `expenses_phone_credit` text COLLATE utf8mb4_unicode_ci,
  `expenses_debts` text COLLATE utf8mb4_unicode_ci,
  `expenses_transportation` text COLLATE utf8mb4_unicode_ci,
  `expenses_pets_food` text COLLATE utf8mb4_unicode_ci,
  `expenses_smoking` text COLLATE utf8mb4_unicode_ci,
  `expenses_food` text COLLATE utf8mb4_unicode_ci,
  `expenses_other` text COLLATE utf8mb4_unicode_ci,
  `expenses_total_category` text COLLATE utf8mb4_unicode_ci,
  `expenses_total` text COLLATE utf8mb4_unicode_ci,
  `assets_house_type` text COLLATE utf8mb4_unicode_ci,
  `assets_house_status` text COLLATE utf8mb4_unicode_ci,
  `assets_house_price` text COLLATE utf8mb4_unicode_ci,
  `assets_house_paying_source` text COLLATE utf8mb4_unicode_ci,
  `assets_electric_meter` text COLLATE utf8mb4_unicode_ci,
  `assets_water_meter` text COLLATE utf8mb4_unicode_ci,
  `assets_water_alternative` text COLLATE utf8mb4_unicode_ci,
  `assets_farm` text COLLATE utf8mb4_unicode_ci,
  `assets_pets` text COLLATE utf8mb4_unicode_ci,
  `assets_vehicle` text COLLATE utf8mb4_unicode_ci,
  `assets_house_alternative_status` text COLLATE utf8mb4_unicode_ci,
  `assets_house_alternative_resident` text COLLATE utf8mb4_unicode_ci,
  `assets_house_alternative_leave` text COLLATE utf8mb4_unicode_ci,
  `assets_house_construction` text COLLATE utf8mb4_unicode_ci,
  `assets_house_floors_count` text COLLATE utf8mb4_unicode_ci,
  `assets_house_rooms_count` text COLLATE utf8mb4_unicode_ci,
  `has_bathroom` text COLLATE utf8mb4_unicode_ci,
  `bathroom_has_door` text COLLATE utf8mb4_unicode_ci,
  `bathroom_has_basin` text COLLATE utf8mb4_unicode_ci,
  `bathroom_has_toilet` text COLLATE utf8mb4_unicode_ci,
  `bathroom_roof` text COLLATE utf8mb4_unicode_ci,
  `bathroom_wall` text COLLATE utf8mb4_unicode_ci,
  `bathroom_floor` text COLLATE utf8mb4_unicode_ci,
  `amenities_mattress` text COLLATE utf8mb4_unicode_ci,
  `amenities_bed` text COLLATE utf8mb4_unicode_ci,
  `amenities_fans` text COLLATE utf8mb4_unicode_ci,
  `amenities_blankets` text COLLATE utf8mb4_unicode_ci,
  `amenities_stove` text COLLATE utf8mb4_unicode_ci,
  `amenities_oven` text COLLATE utf8mb4_unicode_ci,
  `amenities_flame` text COLLATE utf8mb4_unicode_ci,
  `amenities_heater` text COLLATE utf8mb4_unicode_ci,
  `amenities_fridge` text COLLATE utf8mb4_unicode_ci,
  `amenities_washer` text COLLATE utf8mb4_unicode_ci,
  `amenities_cupbord` text COLLATE utf8mb4_unicode_ci,
  `amenities_nish` text COLLATE utf8mb4_unicode_ci,
  `amenities_arika` text COLLATE utf8mb4_unicode_ci,
  `amenities_table` text COLLATE utf8mb4_unicode_ci,
  `amenities_television` text COLLATE utf8mb4_unicode_ci,
  `amenities_receiver` text COLLATE utf8mb4_unicode_ci,
  `amenities_computer` text COLLATE utf8mb4_unicode_ci,
  `need_water` text COLLATE utf8mb4_unicode_ci,
  `need_bathroom` text COLLATE utf8mb4_unicode_ci,
  `need_roof` text COLLATE utf8mb4_unicode_ci,
  `need_blankets` text COLLATE utf8mb4_unicode_ci,
  `need_construction` text COLLATE utf8mb4_unicode_ci,
  `need_education` text COLLATE utf8mb4_unicode_ci,
  `need_food` text COLLATE utf8mb4_unicode_ci,
  `additional_notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `typer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_children`
--

CREATE TABLE `case_children` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `age` text COLLATE utf8mb4_unicode_ci,
  `relationship_status` text COLLATE utf8mb4_unicode_ci,
  `education_status` text COLLATE utf8mb4_unicode_ci,
  `work_status` text COLLATE utf8mb4_unicode_ci,
  `profession` text COLLATE utf8mb4_unicode_ci,
  `is_ill` text COLLATE utf8mb4_unicode_ci,
  `illness_type` text COLLATE utf8mb4_unicode_ci,
  `illness_description` text COLLATE utf8mb4_unicode_ci,
  `illness_prevent_movement` text COLLATE utf8mb4_unicode_ci,
  `need_monthly_treatment` text COLLATE utf8mb4_unicode_ci,
  `has_national_support` text COLLATE utf8mb4_unicode_ci,
  `treatment_monthly_amount` text COLLATE utf8mb4_unicode_ci,
  `treatment_affordable` text COLLATE utf8mb4_unicode_ci,
  `need_operation` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_debts`
--

CREATE TABLE `case_debts` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_id` int(10) UNSIGNED NOT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci,
  `stay` text COLLATE utf8mb4_unicode_ci,
  `reason` text COLLATE utf8mb4_unicode_ci,
  `refund_method` text COLLATE utf8mb4_unicode_ci,
  `monthly_amount` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_income`
--

CREATE TABLE `case_income` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_id` int(10) UNSIGNED NOT NULL,
  `source_type` text COLLATE utf8mb4_unicode_ci,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `monthly_amount` text COLLATE utf8mb4_unicode_ci,
  `source_flow` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_partners`
--

CREATE TABLE `case_partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `age` text COLLATE utf8mb4_unicode_ci,
  `national_id` text COLLATE utf8mb4_unicode_ci,
  `relationship_status` text COLLATE utf8mb4_unicode_ci,
  `education_status` text COLLATE utf8mb4_unicode_ci,
  `work_status` text COLLATE utf8mb4_unicode_ci,
  `profession` text COLLATE utf8mb4_unicode_ci,
  `national_id_front` text COLLATE utf8mb4_unicode_ci,
  `national_id_back` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `is_ill` text COLLATE utf8mb4_unicode_ci,
  `illness_type` text COLLATE utf8mb4_unicode_ci,
  `illness_description` text COLLATE utf8mb4_unicode_ci,
  `illness_prevent_movement` text COLLATE utf8mb4_unicode_ci,
  `need_monthly_treatment` text COLLATE utf8mb4_unicode_ci,
  `has_national_support` text COLLATE utf8mb4_unicode_ci,
  `treatment_monthly_amount` text COLLATE utf8mb4_unicode_ci,
  `treatment_affordable` text COLLATE utf8mb4_unicode_ci,
  `need_operation` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_roommates`
--

CREATE TABLE `case_roommates` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `age` text COLLATE utf8mb4_unicode_ci,
  `relationship_status` text COLLATE utf8mb4_unicode_ci,
  `education_status` text COLLATE utf8mb4_unicode_ci,
  `work_status` text COLLATE utf8mb4_unicode_ci,
  `profession` text COLLATE utf8mb4_unicode_ci,
  `relativity` text COLLATE utf8mb4_unicode_ci,
  `is_ill` text COLLATE utf8mb4_unicode_ci,
  `illness_type` text COLLATE utf8mb4_unicode_ci,
  `illness_description` text COLLATE utf8mb4_unicode_ci,
  `illness_prevent_movement` text COLLATE utf8mb4_unicode_ci,
  `need_monthly_treatment` text COLLATE utf8mb4_unicode_ci,
  `has_national_support` text COLLATE utf8mb4_unicode_ci,
  `treatment_monthly_amount` text COLLATE utf8mb4_unicode_ci,
  `treatment_affordable` text COLLATE utf8mb4_unicode_ci,
  `need_operation` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_rooms`
--

CREATE TABLE `case_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_id` int(10) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci,
  `roof_type` text COLLATE utf8mb4_unicode_ci,
  `roof_status` text COLLATE utf8mb4_unicode_ci,
  `paint` text COLLATE utf8mb4_unicode_ci,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_support`
--

CREATE TABLE `case_support` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_id` int(10) UNSIGNED NOT NULL,
  `source_category` text COLLATE utf8mb4_unicode_ci,
  `source_name` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci,
  `period` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_19_191156_create_roles_table', 1),
(4, '2017_10_19_191405_create_users_roles_table', 1),
(5, '2018_02_09_190332_create_cases_table', 1),
(6, '2018_02_09_195406_create_case_children_table', 1),
(7, '2018_02_09_195436_create_case_roommates_table', 1),
(8, '2018_02_09_195827_create_case_partners_table', 1),
(9, '2018_02_09_221633_create_case_income_table', 1),
(10, '2018_02_09_221640_create_case_support_table', 1),
(11, '2018_02_09_221651_create_case_debts_table', 1),
(12, '2018_02_10_005701_create_case_rooms_table', 1),
(13, '2018_03_14_181946_UsersCasesRelation', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maged', 'maguedfathey@gmail.com', '$2y$10$bsoLEg/vx/iuYoMVgjVHxOPJzTWUdyMriNDnKcMaLerKh0S/10PQ.', 1, 'kUE6uccWCB7rJmZ8HqxGHUqcXyzVe6ocPh9m9S0PbKCnjp5Jpu9xTG82kQ9S', '2018-02-10 12:53:19', '2018-02-10 12:53:19'),
(2, '[\'dg,s', 'a@a.a', '$2y$10$KdbX7gN4wFhHCidPvO0aLe9J6YMQ5c25ekoWjDfmdqzlksyN5Pa9a', 0, NULL, '2018-02-13 13:18:03', '2018-02-13 13:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_children`
--
ALTER TABLE `case_children`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_children_case_id_foreign` (`case_id`);

--
-- Indexes for table `case_debts`
--
ALTER TABLE `case_debts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_debts_case_id_foreign` (`case_id`);

--
-- Indexes for table `case_income`
--
ALTER TABLE `case_income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_income_case_id_foreign` (`case_id`);

--
-- Indexes for table `case_partners`
--
ALTER TABLE `case_partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_partners_case_id_foreign` (`case_id`);

--
-- Indexes for table `case_roommates`
--
ALTER TABLE `case_roommates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_roommate_case_id_foreign` (`case_id`);

--
-- Indexes for table `case_rooms`
--
ALTER TABLE `case_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_rooms_case_id_foreign` (`case_id`);

--
-- Indexes for table `case_support`
--
ALTER TABLE `case_support`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_support_case_id_foreign` (`case_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_roles_user_id_foreign` (`user_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_children`
--
ALTER TABLE `case_children`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_debts`
--
ALTER TABLE `case_debts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_income`
--
ALTER TABLE `case_income`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_partners`
--
ALTER TABLE `case_partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_roommates`
--
ALTER TABLE `case_roommates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_rooms`
--
ALTER TABLE `case_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_support`
--
ALTER TABLE `case_support`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_children`
--
ALTER TABLE `case_children`
  ADD CONSTRAINT `case_children_case_id_foreign` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `case_debts`
--
ALTER TABLE `case_debts`
  ADD CONSTRAINT `case_debts_case_id_foreign` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `case_income`
--
ALTER TABLE `case_income`
  ADD CONSTRAINT `case_income_case_id_foreign` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `case_partners`
--
ALTER TABLE `case_partners`
  ADD CONSTRAINT `case_partners_case_id_foreign` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `case_roommates`
--
ALTER TABLE `case_roommates`
  ADD CONSTRAINT `case_roommate_case_id_foreign` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `case_rooms`
--
ALTER TABLE `case_rooms`
  ADD CONSTRAINT `case_rooms_case_id_foreign` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `case_support`
--
ALTER TABLE `case_support`
  ADD CONSTRAINT `case_support_case_id_foreign` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
