CREATE TABLE `unity` (
          `id` int AUTO_INCREMENT PRIMARY KEY,
          `name` varchar(255) UNIQUE
        );
        
        CREATE TABLE `unity_resource` (
          `unity_id` int,
          `resource_name` varchar(255),
          `value` int,
          `value_name` varchar(255)
        );
        
        CREATE TABLE `unity2tag` (
          `unity_id` int,
          `tag_id` int
        );
        
        CREATE TABLE `tag` (
          `id` int AUTO_INCREMENT PRIMARY KEY,
          `name` varchar(255) UNIQUE,
          `value` varchar(255)
        );
        
        CREATE TABLE `tag_rule` (
          `tag_id` int PRIMARY KEY AUTO_INCREMENT,
          `name` varchar(255) UNIQUE,
          `body` varchar(255),
          `priotity` int
        );
        
        ALTER TABLE `unity_resource` ADD FOREIGN KEY (`unity_id`) REFERENCES `unity` (`id`);
        
        ALTER TABLE `unity2tag` ADD FOREIGN KEY (`unity_id`) REFERENCES `unity` (`id`);
        
        ALTER TABLE `unity2tag` ADD FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`);
        
        ALTER TABLE `tag_rule` ADD FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`);