alter table conferences add column created datetime;
alter table conferences add column modified datetime after created;
/* and if you wanted to implement SoftDelete, you would want this:
 the more I think about it, the more I think you SHOULD because if you only delete a few records every now and then all the more reason. */
-- alter table conferences add column deleted datetime default null;

alter table tags add column created datetime;
alter table tags add column modified datetime after created;
-- alter table tags add column deleted datetime default null;