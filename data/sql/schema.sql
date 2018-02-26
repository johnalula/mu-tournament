CREATE TABLE mutms_tbl_access_level_permission (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), user_role_id BIGINT, module_setting_id BIGINT, access_level BIGINT, can_add TINYINT(1) DEFAULT '0', can_delete TINYINT(1) DEFAULT '0', can_edit TINYINT(1) DEFAULT '0', can_view TINYINT(1) DEFAULT '0', can_approve TINYINT(1) DEFAULT '0', description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_role_id_idx (user_role_id), INDEX module_setting_id_idx (module_setting_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_code_generator (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), prefix_code VARCHAR(50), alias VARCHAR(100), initial_number VARCHAR(100), last_code VARCHAR(100), deleted_code VARCHAR(100), can_recreate_deleted TINYINT(1) DEFAULT '1', code_type BIGINT, has_deleted TINYINT(1) DEFAULT '0', default_flag TINYINT(1) DEFAULT '0', applicable_flag TINYINT(1) DEFAULT '1', active_flag TINYINT(1) DEFAULT '1', description VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_party_contact_address (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), from_date VARCHAR(100), to_date VARCHAR(100), party_id BIGINT, party_token_id VARCHAR(100), address_one VARCHAR(100), address_two VARCHAR(100), country BIGINT, identification_type BIGINT, identification_number VARCHAR(100), mobile_number VARCHAR(255), home_phone_number VARCHAR(255), pobox VARCHAR(255), email VARCHAR(255), website VARCHAR(255), photo VARCHAR(255), photo_file_path VARCHAR(255), default_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '0', status BIGINT, description LONGTEXT, type VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX party_id_idx (party_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_game_category (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, tournament_id BIGINT, category_type BIGINT, category_name VARCHAR(255), alias VARCHAR(50), active_flag TINYINT(1) DEFAULT '1', status BIGINT, description VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), INDEX tournament_id_idx (tournament_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_group_members (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), tournament_id BIGINT, sport_game_group_id BIGINT, team_id BIGINT, start_date VARCHAR(100), effective_date VARCHAR(100), end_date VARCHAR(100), active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX sport_game_group_id_idx (sport_game_group_id), INDEX team_id_idx (team_id), INDEX tournament_id_idx (tournament_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_group_type (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, group_type BIGINT, active_flag TINYINT(1) DEFAULT '1', description VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_match_fixture (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), sport_game_id BIGINT, round_number BIGINT, hosting_place_id BIGINT, gender_category_id BIGINT, start_date VARCHAR(100), effective_date VARCHAR(100), end_date VARCHAR(100), roundable_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX sport_game_id_idx (sport_game_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_match_fixture_detail (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), match_fixture_id BIGINT, team_id BIGINT, person_id BIGINT, effective_date VARCHAR(100), event VARCHAR(100), event_type_id BIGINT, status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX team_id_idx (team_id), INDEX match_fixture_id_idx (match_fixture_id), INDEX person_id_idx (person_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_match_participants (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), match_fixture_id BIGINT, sport_game_group_id BIGINT, team_id BIGINT, effective_date VARCHAR(100), active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX sport_game_group_id_idx (sport_game_group_id), INDEX team_id_idx (team_id), INDEX match_fixture_id_idx (match_fixture_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_match_result (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), match_fixture_id BIGINT, sport_game_group_id BIGINT, team_id BIGINT, start_date VARCHAR(100), effective_date VARCHAR(100), end_date VARCHAR(100), active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX match_fixture_id_idx (match_fixture_id), INDEX sport_game_group_id_idx (sport_game_group_id), INDEX team_id_idx (team_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_match_table (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), game_id BIGINT, group_id BIGINT, team_id BIGINT, person_id BIGINT, position BIGINT, palayed BIGINT, game_win BIGINT, game_draw BIGINT, game_lost BIGINT, goal_for BIGINT, goal_againest BIGINT, goal_difference BIGINT, points BIGINT, active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX team_id_idx (team_id), INDEX person_id_idx (person_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_module_setting (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), module_type_id BIGINT, module_name VARCHAR(150), alias VARCHAR(100), default_access_level_type_id BIGINT, applicable_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '0', default_flag TINYINT(1) DEFAULT '0', trashed_flag TINYINT(1) DEFAULT '0', trashed_on VARCHAR(100), description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_party (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), parent_id BIGINT, name VARCHAR(255), alias VARCHAR(50), party_code_number VARCHAR(100), parent_flag TINYINT(1) DEFAULT '0', super_parent_flag TINYINT(1) DEFAULT '0', default_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, trashed_flag TINYINT(1) DEFAULT '0', trashed_on VARCHAR(100), description LONGTEXT, type VARCHAR(255), representative_id BIGINT, title VARCHAR(40), father_name VARCHAR(100), grand_father_name VARCHAR(100), full_name VARCHAR(255), gender BIGINT, date_of_birth VARCHAR(100), place_of_birth VARCHAR(100), religion BIGINT, ethnicity BIGINT, nationality BIGINT, access_activation_key VARCHAR(100), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX parent_id_idx (parent_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_party (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), parent_id BIGINT, name VARCHAR(255), alias VARCHAR(50), party_code_number VARCHAR(100), parent_flag TINYINT(1) DEFAULT '0', super_parent_flag TINYINT(1) DEFAULT '0', default_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, trashed_flag TINYINT(1) DEFAULT '0', trashed_on VARCHAR(100), description LONGTEXT, type VARCHAR(255), representative_id BIGINT, title VARCHAR(40), father_name VARCHAR(100), grand_father_name VARCHAR(100), full_name VARCHAR(255), gender BIGINT, date_of_birth VARCHAR(100), place_of_birth VARCHAR(100), religion BIGINT, ethnicity BIGINT, nationality BIGINT, access_activation_key VARCHAR(100), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX mutms_tbl_party_type_idx (type), INDEX parent_id_idx (parent_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_party_contact_address (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), from_date VARCHAR(100), to_date VARCHAR(100), party_id BIGINT, party_token_id VARCHAR(100), address_one VARCHAR(100), address_two VARCHAR(100), country BIGINT, identification_type BIGINT, identification_number VARCHAR(100), mobile_number VARCHAR(255), home_phone_number VARCHAR(255), pobox VARCHAR(255), email VARCHAR(255), website VARCHAR(255), photo VARCHAR(255), photo_file_path VARCHAR(255), default_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '0', status BIGINT, description LONGTEXT, type VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX mutms_tbl_party_contact_address_type_idx (type), INDEX party_id_idx (party_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_party_relationship (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), party_id BIGINT, relationship_type BIGINT, position_role_id BIGINT, from_date VARCHAR(100), to_date VARCHAR(100), status BIGINT DEFAULT 1, default_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '0', description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX party_id_idx (party_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_party_role (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), party_id BIGINT, party_role_type BIGINT, party_unit_type BIGINT, party_type BIGINT, from_date VARCHAR(100), thru_date VARCHAR(100), status BIGINT DEFAULT 1, default_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '0', description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX party_id_idx (party_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_round_type (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, round_type BIGINT, name VARCHAR(255), alias VARCHAR(50), active_flag TINYINT(1) DEFAULT '1', description VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_sport_game (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, tournament_id BIGINT, sport_game_type_id BIGINT, name VARCHAR(255), alias VARCHAR(50), envent_type BIGINT, distance_category BIGINT, distance BIGINT, distance_measurement BIGINT, double_single_type BIGINT, start_date VARCHAR(100), effective_date VARCHAR(100), end_date VARCHAR(100), roundable_flag TINYINT(1), active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX tournament_id_idx (tournament_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_sport_game_group (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), tournament_id BIGINT, group_name VARCHAR(255), alias VARCHAR(50), total_group_numbers BIGINT, start_date VARCHAR(100), end_date VARCHAR(100), active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX tournament_id_idx (tournament_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_system_config (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), active_language BIGINT, default_pagination_number BIGINT, start_date VARCHAR(100), end_date VARCHAR(100), default_flag TINYINT(1) DEFAULT '0', applicable_flag TINYINT(1) DEFAULT '1', active_flag TINYINT(1) DEFAULT '1', description VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_system_log_file (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), user_id BIGINT, module_setting_id BIGINT, action_date VARCHAR(100), action_time VARCHAR(50), action_data LONGTEXT, action_type_id BIGINT, host_name VARCHAR(100), document_root VARCHAR(100), php_self VARCHAR(100), pc_ip_address VARCHAR(100), browser_type VARCHAR(100), description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), INDEX org_id_idx (org_id), INDEX module_setting_id_idx (module_setting_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_teams (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, tournament_id BIGINT, country_id BIGINT, team_name VARCHAR(255), alias VARCHAR(50), team_city VARCHAR(50), team_logo VARCHAR(50), start_date VARCHAR(100), end_date VARCHAR(100), active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), INDEX tournament_id_idx (tournament_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_team_detail (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), team_id BIGINT, active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX team_id_idx (team_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_team_game_participation (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), team_id BIGINT, player_name VARCHAR(255), player_role_id BIGINT, player_number BIGINT, active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX team_id_idx (team_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_team_participants (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), team_id BIGINT, player_name VARCHAR(255), player_role_id BIGINT, player_number BIGINT, active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX team_id_idx (team_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_tournament (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), name VARCHAR(255), alias VARCHAR(50), season VARCHAR(50), start_date VARCHAR(100), effective_date VARCHAR(100), end_date VARCHAR(100), active_flag TINYINT(1) DEFAULT '1', status BIGINT DEFAULT 1, description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_user (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), person_id BIGINT, person_token_id VARCHAR(100), username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, full_password VARCHAR(255) NOT NULL, access_activation_key VARCHAR(100), user_role_id BIGINT, group_id BIGINT, permission_mode BIGINT, has_logged_in TINYINT(1) DEFAULT '0', last_login_date VARCHAR(100), activated_key_flag TINYINT(1) DEFAULT '0', super_admin_flag TINYINT(1) DEFAULT '0', default_super_admin_flag TINYINT(1) DEFAULT '0', default_flag TINYINT(1) DEFAULT '0', active_flag TINYINT(1) DEFAULT '0', blocked_flag TINYINT(1) DEFAULT '0', login_flag TINYINT(1) DEFAULT '0', status BIGINT, trashed_flag TINYINT(1) DEFAULT '0', trashed_on VARCHAR(100), description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), INDEX person_id_idx (person_id), INDEX user_role_id_idx (user_role_id), INDEX group_id_idx (group_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_user_group (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), user_group_role_id BIGINT, name VARCHAR(100), ui_theme_color_setting BIGINT DEFAULT 1, ui_language_setting BIGINT DEFAULT 1, active_flag TINYINT(1) DEFAULT '0', status BIGINT, trashed_flag TINYINT(1) DEFAULT '0', trashed_on VARCHAR(100), description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_group_role_id_idx (user_group_role_id), INDEX org_id_idx (org_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mutms_tbl_user_role (id BIGINT AUTO_INCREMENT, token_id VARCHAR(100), org_id BIGINT, org_token_id VARCHAR(100), user_role_name VARCHAR(150), user_role_type_id BIGINT, alias VARCHAR(100), active_flag TINYINT(1) DEFAULT '0', default_flag TINYINT(1) DEFAULT '0', trashed_flag TINYINT(1) DEFAULT '0', trashed_on VARCHAR(100), description LONGTEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX org_id_idx (org_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE mutms_tbl_access_level_permission ADD CONSTRAINT mumi FOREIGN KEY (user_role_id) REFERENCES mutms_tbl_user_role(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_access_level_permission ADD CONSTRAINT mmmi FOREIGN KEY (module_setting_id) REFERENCES mutms_tbl_module_setting(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_code_generator ADD CONSTRAINT mutms_tbl_code_generator_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_party_contact_address ADD CONSTRAINT mutms_tbl_party_contact_address_party_id_mutms_tbl_party_id FOREIGN KEY (party_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_game_category ADD CONSTRAINT mutms_tbl_game_category_tournament_id_mutms_tbl_tournament_id FOREIGN KEY (tournament_id) REFERENCES mutms_tbl_tournament(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_game_category ADD CONSTRAINT mutms_tbl_game_category_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_group_members ADD CONSTRAINT mutms_tbl_group_members_tournament_id_mutms_tbl_tournament_id FOREIGN KEY (tournament_id) REFERENCES mutms_tbl_tournament(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_group_members ADD CONSTRAINT mutms_tbl_group_members_team_id_mutms_tbl_teams_id FOREIGN KEY (team_id) REFERENCES mutms_tbl_teams(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_group_members ADD CONSTRAINT msmi FOREIGN KEY (sport_game_group_id) REFERENCES mutms_tbl_sport_game_group(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_group_type ADD CONSTRAINT mutms_tbl_group_type_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_fixture ADD CONSTRAINT mutms_tbl_match_fixture_sport_game_id_mutms_tbl_sport_game_id FOREIGN KEY (sport_game_id) REFERENCES mutms_tbl_sport_game(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_fixture_detail ADD CONSTRAINT mutms_tbl_match_fixture_detail_team_id_mutms_tbl_teams_id FOREIGN KEY (team_id) REFERENCES mutms_tbl_teams(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_fixture_detail ADD CONSTRAINT mutms_tbl_match_fixture_detail_person_id_mutms_tbl_party_id FOREIGN KEY (person_id) REFERENCES mutms_tbl_party(id);
ALTER TABLE mutms_tbl_match_fixture_detail ADD CONSTRAINT mmmi_1 FOREIGN KEY (match_fixture_id) REFERENCES mutms_tbl_match_fixture(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_participants ADD CONSTRAINT mutms_tbl_match_participants_team_id_mutms_tbl_teams_id FOREIGN KEY (team_id) REFERENCES mutms_tbl_teams(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_participants ADD CONSTRAINT msmi_1 FOREIGN KEY (sport_game_group_id) REFERENCES mutms_tbl_sport_game_group(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_participants ADD CONSTRAINT mmmi_2 FOREIGN KEY (match_fixture_id) REFERENCES mutms_tbl_match_fixture(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_result ADD CONSTRAINT mutms_tbl_match_result_team_id_mutms_tbl_teams_id FOREIGN KEY (team_id) REFERENCES mutms_tbl_teams(id);
ALTER TABLE mutms_tbl_match_result ADD CONSTRAINT msmi_2 FOREIGN KEY (sport_game_group_id) REFERENCES mutms_tbl_sport_game_group(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_result ADD CONSTRAINT mmmi_3 FOREIGN KEY (match_fixture_id) REFERENCES mutms_tbl_match_fixture(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_table ADD CONSTRAINT mutms_tbl_match_table_team_id_mutms_tbl_teams_id FOREIGN KEY (team_id) REFERENCES mutms_tbl_teams(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_match_table ADD CONSTRAINT mutms_tbl_match_table_person_id_mutms_tbl_party_id FOREIGN KEY (person_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_module_setting ADD CONSTRAINT mutms_tbl_module_setting_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_party ADD CONSTRAINT mutms_tbl_party_parent_id_mutms_tbl_party_id FOREIGN KEY (parent_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_party_relationship ADD CONSTRAINT mutms_tbl_party_relationship_party_id_mutms_tbl_party_id FOREIGN KEY (party_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_party_role ADD CONSTRAINT mutms_tbl_party_role_party_id_mutms_tbl_party_id FOREIGN KEY (party_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_round_type ADD CONSTRAINT mutms_tbl_round_type_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_sport_game ADD CONSTRAINT mutms_tbl_sport_game_tournament_id_mutms_tbl_tournament_id FOREIGN KEY (tournament_id) REFERENCES mutms_tbl_tournament(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_sport_game_group ADD CONSTRAINT mutms_tbl_sport_game_group_tournament_id_mutms_tbl_tournament_id FOREIGN KEY (tournament_id) REFERENCES mutms_tbl_tournament(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_system_config ADD CONSTRAINT mutms_tbl_system_config_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_system_log_file ADD CONSTRAINT mutms_tbl_system_log_file_user_id_mutms_tbl_user_id FOREIGN KEY (user_id) REFERENCES mutms_tbl_user(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_system_log_file ADD CONSTRAINT mutms_tbl_system_log_file_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_system_log_file ADD CONSTRAINT mmmi_4 FOREIGN KEY (module_setting_id) REFERENCES mutms_tbl_module_setting(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_teams ADD CONSTRAINT mutms_tbl_teams_tournament_id_mutms_tbl_tournament_id FOREIGN KEY (tournament_id) REFERENCES mutms_tbl_tournament(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_teams ADD CONSTRAINT mutms_tbl_teams_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_team_detail ADD CONSTRAINT mutms_tbl_team_detail_team_id_mutms_tbl_teams_id FOREIGN KEY (team_id) REFERENCES mutms_tbl_teams(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_team_game_participation ADD CONSTRAINT mutms_tbl_team_game_participation_team_id_mutms_tbl_teams_id FOREIGN KEY (team_id) REFERENCES mutms_tbl_teams(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_team_participants ADD CONSTRAINT mutms_tbl_team_participants_team_id_mutms_tbl_teams_id FOREIGN KEY (team_id) REFERENCES mutms_tbl_teams(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_tournament ADD CONSTRAINT mutms_tbl_tournament_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_user ADD CONSTRAINT mutms_tbl_user_user_role_id_mutms_tbl_user_role_id FOREIGN KEY (user_role_id) REFERENCES mutms_tbl_user_role(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_user ADD CONSTRAINT mutms_tbl_user_person_id_mutms_tbl_party_id FOREIGN KEY (person_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_user ADD CONSTRAINT mutms_tbl_user_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_user ADD CONSTRAINT mutms_tbl_user_group_id_mutms_tbl_user_group_id FOREIGN KEY (group_id) REFERENCES mutms_tbl_user_group(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_user_group ADD CONSTRAINT mutms_tbl_user_group_user_group_role_id_mutms_tbl_user_role_id FOREIGN KEY (user_group_role_id) REFERENCES mutms_tbl_user_role(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_user_group ADD CONSTRAINT mutms_tbl_user_group_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
ALTER TABLE mutms_tbl_user_role ADD CONSTRAINT mutms_tbl_user_role_org_id_mutms_tbl_party_id FOREIGN KEY (org_id) REFERENCES mutms_tbl_party(id) ON DELETE CASCADE;
