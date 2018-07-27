<?php
namespace app\api\bean\db;

class GroupMember {

    const NOTIFY_LEVEL_INVALID = -1;//默认不接收消息
    const NOTIFY_LEVEL_NONE = 0;//默认通知级别
    const NOTIFY_LEVEL_CLOSE = 1;//接收消息不提示

    const PERMISSION_TYPE_NONE = 0; //默认权限，普通成员
    const PERMISSION_TYPE_ADMIN = 1;//管理员
    const PERMISSION_TYPE_ADMIN_SU = 100;//创建者

    private $id;
    private $alias;
    private $notifyLevel;
    private $permissionType;
    private $createAt;
    private $updateAt;
    private $user;
    private $userId;
    private $group;
    private $groupId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * @return mixed
     */
    public function getNotifyLevel()
    {
        return $this->notifyLevel;
    }

    /**
     * @param mixed $notifyLevel
     */
    public function setNotifyLevel($notifyLevel)
    {
        $this->notifyLevel = $notifyLevel;
    }

    /**
     * @return mixed
     */
    public function getPermissionType()
    {
        return $this->permissionType;
    }

    /**
     * @param mixed $permissionType
     */
    public function setPermissionType($permissionType)
    {
        $this->permissionType = $permissionType;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @param mixed $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * @param mixed $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param mixed $groupId
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    }

    
}