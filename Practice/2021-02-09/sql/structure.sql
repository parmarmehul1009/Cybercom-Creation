--
-- Database: `bootstrap_contact_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `webapp` (
 `id` int(10) NOT NULL,
 `name` varchar(20) NOT NULL,
 `email` varchar(30) NOT NULL,
 `phone` int(10) NOT NULL,
 `title1` varchar(10) NOT NULL,
 `created` date NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4



--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `webapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `webapp` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;