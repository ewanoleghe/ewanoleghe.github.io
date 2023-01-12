--
-- Table structure for table `wallet`
--


CREATE TABLE `wallet` (
  `id` int(57) NOT NULL,
  `GuestName` varchar(50) NOT NULL,
  `rDate` varchar(50) NOT NULL,
  `rCode` varchar(100) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `ItemPrice` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `nImages` text(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!255101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!255101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!255101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Table structure for table `xbuyer`
--


CREATE TABLE `xbuyer` (
  `id` int(57) NOT NULL,
  `GuestName` varchar(50) NOT NULL,
  `rDate` varchar(50) NOT NULL,
  `nCoyN` varchar(50) NOT NULL,
  `nEmail` varchar(50) NOT NULL,
  `nTitle` varchar(50) NOT NULL,
  `nFnom` varchar(50) NOT NULL,
  `nMidN` varchar(50) NOT NULL,
  `nLnom` varchar(50) NOT NULL,
  `nAdd1` varchar(50) NOT NULL,
  `nAdd2` varchar(50) NOT NULL,
  `nZip` varchar(50) NOT NULL,
  `nCountry` varchar(50) NOT NULL,
  `nState` varchar(50) NOT NULL,
  `nPhone` varchar(50) NOT NULL,
  `nMobile` varchar(50) NOT NULL,
  `nFax` varchar(50) NOT NULL,
  `nNotes` varchar(250) NOT NULL,
  `nPayMode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xbuyer`
--
ALTER TABLE `xbuyer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table xbuyer`
--
ALTER TABLE `xbuyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!255101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!255101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!255101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

