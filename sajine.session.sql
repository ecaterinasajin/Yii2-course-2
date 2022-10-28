ALTER TABLE article
add constraint article_user_updated_fk
foreign key (updated_by) references user (id);