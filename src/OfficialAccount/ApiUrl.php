<?php

/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/12/24
 * Time: 10:37 PM
 */

namespace EasySwoole\WeChat\OfficialAccount;


class ApiUrl
{
    const NET_CHECK = 'https://api.weixin.qq.com/cgi-bin/callback/check?access_token=ACCESS_TOKEN';
    const IP_LIST = 'https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=ACCESS_TOKEN';
    /*
     * 获取ACCESS_TOKEN
     */
    const ACCESS_TOKEN = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APP_ID&secret=APP_SECRET';

    /*
     * 获取微信服务器IP地址
     */
    const GET_CALLBACK_IP = 'https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=ACCESS_TOKEN';

    /*
     * 网络检测
     */
    const CALLBACK_CHECK = 'https://api.weixin.qq.com/cgi-bin/callback/check?access_token=ACCESS_TOKEN';

    /*
     * 多媒体文件上传
     */
    const MEDIA_UPLOAD = 'https://api.weixin.qq.com/cgi-bin/media/upload?access_token=ACCESS_TOKEN&type=TYPE&media=MEDIA';

    /*
     * 上传图文消息内的图片获取URL
     */
    const MEDIA_UPLOAD_IMG = 'https://api.weixin.qq.com/cgi-bin/media/uploadimg?access_token=ACCESS_TOKEN';

    /*
     * 上传图文消息素材
     */
    const MEDIA_UPLOAD_NEWS = 'https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=ACCESS_TOKEN';

    /*
     * 根据标签进行群发图文消息
     */
    const MESSAGE_MASS_SEND_ALL = 'https://api.weixin.qq.com/cgi-bin/message/mass/sendall?access_token=ACCESS_TOKEN';

    /*
     * 根据OpenID列表群发图文消息
     */
    const MESSAGE_MASS_SEND = 'https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token=ACCESS_TOKEN';

    /*
     * 删除群发图文消息
     */
    const MESSAGE_MASS_DELETE = 'https://api.weixin.qq.com/cgi-bin/message/mass/delete?access_token=ACCESS_TOKEN';

    /*
     * 预览图文消息
     */
    const MESSAGE_MASS_PREVIEW = 'https://api.weixin.qq.com/cgi-bin/message/mass/preview?access_token=ACCESS_TOKEN';

    /*
     * 查询群发消息发送状态
     */
    const MESSAGE_MASS_GET = 'https://api.weixin.qq.com/cgi-bin/message/mass/get?access_token=ACCESS_TOKEN';

    /*
     * 获取群发速度
     */
    const MESSAGE_MASS_SPEED = 'https://api.weixin.qq.com/cgi-bin/message/mass/speed/get?access_token=ACCESS_TOKEN';

    /*
     * 下载多媒体文件
     */
    const MEDIA_GET = 'http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=ACCESS_TOKEN&media_id=MEDIA_ID';


    /*
     * 发送客服消息
     */
    const MESSAGE_CUSTOM_SEND = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=ACCESS_TOKEN';

    /*
     * 获取用户关注列表
     */
    const USER_GET = 'https://api.weixin.qq.com/cgi-bin/user/get?access_token=ACCESS_TOKEN&next_openid=NEXT_OPENID';

    /*
     * 获取用户基本信息
     */
    const USER_INFO = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token=ACCESS_TOKEN&openid=OPENID';

    /*
     * 查询分组
     */
    const GROUPS_GET = 'https://api.weixin.qq.com/cgi-bin/groups/get?access_token=ACCESS_TOKEN';

    /*
     * 创建分组
     */
    const GROUPS_CREATE = 'https://api.weixin.qq.com/cgi-bin/groups/create?access_token=ACCESS_TOKEN';

    /*
     * 修改分组名
     */
    const GROUPS_UPDATE = 'https://api.weixin.qq.com/cgi-bin/groups/update?access_token=ACCESS_TOKEN';

    /*
     * 移动用户分组
     */
    const GROUPS_MEMBERS_UPDATE = 'https://api.weixin.qq.com/cgi-bin/groups/members/update?access_token=ACCESS_TOKEN';

    /*
     * 查询用户分组ID
     */
    const GROUPS_GET_ID = 'https://api.weixin.qq.com/cgi-bin/groups/getid?access_token=ACCESS_TOKEN';

    /*
     * 自定义菜单创建
     */
    const MENU_CREATE = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN';

    /*
     * 自定义菜单查询
     */
    const MENU_GET = 'https://api.weixin.qq.com/cgi-bin/menu/get?access_token=ACCESS_TOKEN';

    /*
     * 自定义菜单删除
     */
    const MENU_DELETE = 'https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=ACCESS_TOKEN';

    /*
     * 创建个性化菜单
     */
    const MENU_ADD_CONDITIONAL = 'https://api.weixin.qq.com/cgi-bin/menu/addconditional?access_token=ACCESS_TOKEN';

    /**
     * 测试个性化菜单
     */
    const MENU_MATCH_CONDITIONAL = 'https://api.weixin.qq.com/cgi-bin/menu/trymatch?access_token=ACCESS_TOKEN';

    /**
     * 删除个性化菜单
     */
    const MENU_DELETE_CONDITIONAL = 'https://api.weixin.qq.com/cgi-bin/menu/delconditional?access_token=ACCESS_TOKEN';

    /*
     * 获取自定义菜单配置
     */
    const GET_CURRENT_SELFMENU_INFO = 'https://api.weixin.qq.com/cgi-bin/get_current_selfmenu_info?access_token=ACCESS_TOKEN';

    /*
     * 客服消息-添加客服账号
     */
    const CUSTOM_SERVICE_KF_ACCOUNT_ADD = 'https://api.weixin.qq.com/customservice/kfaccount/add?access_token=ACCESS_TOKEN';

    /*
     * 客服消息-修改客服账号
     */
    const CUSTOM_SERVICE_KF_ACCOUNT_UPDATE = 'https://api.weixin.qq.com/customservice/kfaccount/update?access_token=ACCESS_TOKEN';

    /*
     * 客服消息-删除客服账号
     */
    const CUSTOM_SERVICE_KF_ACCOUNT_DELETE = 'https://api.weixin.qq.com/customservice/kfaccount/del?access_token=ACCESS_TOKEN';

    /*
     * 客服消息-设置客服账号的头像
     */
    const CUSTOM_SERVICE_KF_ACCOUNT_UPLOAD_HEAD_IMG = 'http://api.weixin.qq.com/customservice/kfaccount/uploadheadimg?access_token=ACCESS_TOKEN&kf_account=KFACCOUNT';

    /*
     * 客服消息-获取所有客服账号
     */
    const CUSTOM_SERVICE_GET_KF_LIST = 'https://api.weixin.qq.com/cgi-bin/customservice/getkflist?access_token=ACCESS_TOKEN';

    /*
     * 客服消息-客服输入状态
     */
    const MESSAGE_CUSTOM_TYPING = 'https://api.weixin.qq.com/cgi-bin/message/custom/typing?access_token=ACCESS_TOKEN';

    /*
     * 创建二维码ticket
     */
    const QRCODE_CREATE = 'https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=ACCESS_TOKEN';

    /*
     * 换取二维码
     */
    const SHOW_QRCODE = 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=TICKET';

    /*
     * 设备授权-获取deviceid和二维码
     */
    const DEVICE_GET_QRCODE = 'https://api.weixin.qq.com/device/getqrcode?access_token=ACCESS_TOKEN';

    /* 
     * 设备授权-利用deviceid更新设备属性
     */
    const DEVICE_AUTHORIZE_DEVICE = 'https://api.weixin.qq.com/device/authorize_device?access_token=ACCESS_TOKEN';

    /*
     * 验证设备二维码
     * */
    const DEVICE_VERIFY_QRCODE = 'https://api.weixin.qq.com/device/verify_qrcode?access_token=ACCESS_TOKEN';

    /*
     * 查询设备状态
     * */
    const DEVICE_GET_STAT = 'https://api.weixin.qq.com/device/get_stat?access_token=ACCESS_TOKEN&device_id=DEVICE_ID';

    /*
     * 设备绑定-绑定成功通知
     * */
    const DEVICE_BIND = 'https://api.weixin.qq.com/device/bind?access_token=ACCESS_TOKEN';

    /*
     * 设备绑定-强制绑定用户和设备
     * */
    const DEVICE_COMPEL_BIND = 'https://api.weixin.qq.com/device/compel_bind?access_token=ACCESS_TOKEN';

    /*
     * 设备解绑-解绑成功通知
     * */
    const DEVICE_UNBIND = 'https://api.weixin.qq.com/device/unbind?access_token=ACCESS_TOKEN';


    /*
     * 设备解绑-强制解绑用户和设备
     * */
    const DEVICE_COMPEL_UNBIND = 'https://api.weixin.qq.com/device/compel_unbind?access_token=ACCESS_TOKEN';

    /*
     * 查询设备绑定的用户
     * */
    const DEVICE_GET_OPENID = 'https://api.weixin.qq.com/device/get_openid?access_token=ACCESS_TOKEN&device_type=DEVICE_TYPE&device_id=DEVICE_TYPE';

    /*
     * 查询用户绑定的设备
     * */
    const DEVICE_GET_BIND_DEVICE = 'https://api.weixin.qq.com/device/get_bind_device?access_token=ACCESS_TOKEN&openid=OPENID';

    /*
     * 推送消息-发送设备消息
     * */
    const DEVICE_TRANS_MSG = 'https://api.weixin.qq.com/device/transmsg?access_token=ACCESS_TOKEN';

    /*
     * 创建卡券
     * */
    const CARD_CREATE = 'https://api.weixin.qq.com/card/create?access_token=ACCESS_TOKEN';

    /*
     * 创建卡券二维码获取ticket
     * */
    const CARD_QRCODE_CREATE = 'https://api.weixin.qq.com/card/qrcode/create?access_token=ACCESS_TOKEN';

    /*
     * 设置卡券测试白名单
     * */
    const CARD_TEST_WHITELIST = 'https://api.weixin.qq.com/card/testwhitelist/set?access_token=ACCESS_TOKEN';

    /*
     * 核销卡券
     * */
    const CARD_CONSUME = 'https://api.weixin.qq.com/card/code/consume?access_token=ACCESS_TOKEN';

    /*
     * 打开已群发文章评论
     * */
    const COMMENT_OPEN = 'https://api.weixin.qq.com/cgi-bin/comment/open?access_token=ACCESS_TOKEN';

    /*
     * 关闭已群发文章评论
     * */
    const COMMENT_CLOSE = 'https://api.weixin.qq.com/cgi-bin/comment/close?access_token=ACCESS_TOKEN';

    /*
     * 查看文章评论数据
     * */
    const COMMENT_LIST = 'https://api.weixin.qq.com/cgi-bin/comment/list?access_token=ACCESS_TOKEN';

    /*
     * 精选评论
     * */
    const COMMENT_MARKELECT = 'https://api.weixin.qq.com/cgi-bin/comment/markelect?access_token=ACCESS_TOKEN';

    /*
    * 取消精选评论
    * */
    const COMMENT_UNMARKELECT = 'https://api.weixin.qq.com/cgi-bin/comment/unmarkelect?access_token=ACCESS_TOKEN';

    /*
    * 删除评论
    * */
    const COMMENT_DELETE = 'https://api.weixin.qq.com/cgi-bin/comment/delete?access_token=ACCESS_TOKEN';

    /*
    * 回复评论
    * */
    const COMMENT_REPLY_ADD = 'https://api.weixin.qq.com/cgi-bin/comment/reply/add?access_token=ACCESS_TOKEN';

    /*
     * 删除回复评论
     * */
    const COMMENT_REPLY_DELETE = 'https://api.weixin.qq.com/cgi-bin/comment/reply/delete?access_token=ACCESS_TOKEN';

    /**
     * 网页授权跳转链接
     */
    const JSAPI_AUTHORIZE = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect';

    /**
     * 网页授权CODE换取ACCESS_TOKEN
     */
    const JSAPI_CODE_TO_TOKEN = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=SECRET&code=CODE&grant_type=authorization_code';

    /**
     * 网页授权令牌刷新
     */
    const JSAPI_REFRESH_TOKEN = 'https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=APPID&grant_type=refresh_token&refresh_token=REFRESH_TOKEN';

    /**
     * 网页授权获取用户信息
     */
    const JSAPI_SNS_USERINFO = 'https://api.weixin.qq.com/sns/userinfo?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN';

    /**
     * 网页授权检验授权凭证
     */
    const JSAPI_SNS_AUTH_CHECK = 'https://api.weixin.qq.com/sns/auth?access_token=ACCESS_TOKEN&openid=OPENID';

    /**
     * 获取JSSDK授权票据
     */
    const JSAPI_GET_TICKET = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=ACCESS_TOKEN&type=jsapi';

    public static function generateURL(string $baseUrl, array $data): string
    {
        foreach ($data as $key => $item) {
            $baseUrl = str_replace($key, $item, $baseUrl);
        }
        return $baseUrl;
    }
}