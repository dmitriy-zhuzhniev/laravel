<?php

namespace App\Domain;

use App\Domain\Game\Game;
use App\Domain\VoucherBatch\VoucherBatch;
use Carbon\Carbon;
use Defuse\Crypto\Encoding;
use Doctrine\Common\Collections\Collection;
use LaravelDoctrine\ORM\Auth\Authenticatable;

class User implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $role = '';

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $businessName;

    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $address1;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $address3;

    /**
     * @var string
     */
    private $county;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $points = 0;

    /**
     * @var string
     */
    private $email;

    /**
     * Base64 image
     *
     * @var string
     */
    private $photo = '';

    /**
     * @var Carbon|null
     */
    private $birthDate = null;

    /**
     * @var string
     */
    private $activationCode = '';

    /**
     * @var Carbon|null
     */
    private $activatedAt = null;

    /**
     * @var string
     */
    private $hashedPassword;

    /**
     * @var string
     */
    private $resetPasswordCode;

    /**
     * @var string
     */
    private $restoreProfileCode;

    /**
     * @var Carbon|null
     */
    private $bannedAt = null;

    /**
     * @var Carbon|null
     */
    private $accessStart = null;

    /**
     * @var Carbon|null
     */
    private $accessEnd = null;

    /**
     * @var string
     */
    private $paymentId = null;

    /**
     * @var string
     */
    private $websiteUrl;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $otherAccounts;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $details;

    /**
     * @var Game[]|Collection
     */
    private $games = [];

    /**
     * @var Carbon
     */
    private $deletedAt;

    /**
     * @var Carbon
     */
    private $createdAt;

    /**
     * @var Carbon
     */
    private $loginAt;

    /**
     * @var string
     */
    private $loginCode;

    /**
     * @var boolean
     */
    private $isUnsubscribed = 0;

    /**
     * @var VoucherBatch[]|Collection
     */
    private $voucherBatches = [];

    /**
     * @var boolean
     */
    private $isPlayedGame = 0;

    /**
     * @param string $email
     * @param string $role
     * @param string $hashedPassword
     * @param $createdAt
     */
    public function __construct(
        $email,
        $role,
        $hashedPassword,
        $createdAt
    ) {
        $this->email = $email;
        $this->role = $role;
        $this->hashedPassword = $hashedPassword;
        $this->createdAt = $createdAt;
    }

    /**
     * @param string $email
     * @param string $role
     * @param string $password
     *
     * @return User
     */
    public static function register($email, $role, $password)
    {
        return new User($email, $role, $password, new Carbon('now'));
    }

    /**
     * @return bool
     */
    public function accessPaid()
    {
        return $this->accessStart() <= (new Carbon())->now() && $this->accessEnd() > (new Carbon())->now();
    }

    /**
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function fullName()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function businessName()
    {
        return $this->businessName;
    }

    /**
     * @return string
     */
    public function email()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function hashedPassword()
    {
        return $this->hashedPassword;
    }

    /**
     * @return string
     */
    public function resetPasswordCode()
    {
        return $this->resetPasswordCode;
    }

    /**
     * @return Carbon|null
     */
    public function bannedAt()
    {
        return $this->bannedAt;
    }

    /**
     * @return string
     */
    public function photo()
    {
        return $this->photo;
    }

    /**
     * @return Carbon|null
     */
    public function BirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @return string
     */
    public function role()
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function activationCode()
    {
        return $this->activationCode;
    }

    /**
     * @return Carbon|null
     */
    public function activatedAt()
    {
        return $this->activatedAt;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @param string $businessName
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param string $hashedPassword
     */
    public function setHashedPassword($hashedPassword)
    {
        $this->hashedPassword = $hashedPassword;
    }

    /**
     * @param string $resetPasswordCode
     */
    public function setResetPasswordCode($resetPasswordCode)
    {
        $this->resetPasswordCode = $resetPasswordCode;
    }

    /**
     * @param Carbon|null $bannedAt
     */
    public function setBannedAt($bannedAt)
    {
        $this->bannedAt = $bannedAt;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @param Carbon|null $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @param string $activationCode
     */
    public function setActivationCode($activationCode)
    {
        $this->activationCode = $activationCode;
    }

    /**
     * @param Carbon|null $activatedAt
     */
    public function setActivatedAt($activatedAt)
    {
        $this->activatedAt = $activatedAt;
    }

    /**
     * @return Game[]
     */
    public function games()
    {
        return $this->games;
    }

    /**
     * @param Game[] $games
     */
    public function setGames($games)
    {
        $this->games = $games;
    }

    /**
     * @return string
     */
    public function userName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function contactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    /**
     * @return string
     */
    public function address1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return string
     */
    public function address2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return string
     */
    public function address3()
    {
        return $this->address3;
    }

    /**
     * @param string $address3
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    }

    /**
     * @return string
     */
    public function county()
    {
        return $this->county;
    }

    /**
     * @param string $county
     */
    public function setCounty($county)
    {
        $this->county = $county;
    }

    /**
     * @return string
     */
    public function city()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function postcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function phone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function points()
    {
        return $this->points;
    }

    /**
     * @param string $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return Carbon|null
     */
    public function accessEnd()
    {
        return $this->accessEnd;
    }

    /**
     * @param Carbon|null $accessEnd
     */
    public function setAccessEnd($accessEnd)
    {
        $this->accessEnd = $accessEnd;
    }

    /**
     * @return Carbon|null
     */
    public function accessStart()
    {
        return $this->accessStart;
    }

    /**
     * @param Carbon|null $accessStart
     */
    public function setAccessStart($accessStart)
    {
        $this->accessStart = $accessStart;
    }

    /**
     * @return string
     */
    public function paymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return string
     */
    public function websiteUrl()
    {
        return $this->websiteUrl;
    }

    /**
     * @param string $websiteUrl
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
    }

    /**
     * @return string
     */
    public function twitter()
    {
        return $this->twitter;
    }

    /**
     * @param string $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @return string
     */
    public function facebook()
    {
        return $this->facebook;
    }

    /**
     * @param string $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return string
     */
    public function otherAccounts()
    {
        return $this->otherAccounts;
    }

    /**
     * @param string $otherAccounts
     */
    public function setOtherAccounts($otherAccounts)
    {
        $this->otherAccounts = $otherAccounts;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function details()
    {
        return $this->details;
    }

    /**
     * @param string $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return Carbon
     */
    public function deletedAt()
    {
        return $this->deletedAt;
    }

    public function delete()
    {
        $this->deletedAt = new Carbon('now');

        $this->games->map(function (Game $game) {
            $game->delete();
        });
    }

    /**
     * @return Carbon
     */
    public function loginAt()
    {
        return $this->loginAt;
    }

    /**
     * @param Carbon $loginAt
     */
    public function setLoginAt($loginAt)
    {
        $this->loginAt = $loginAt;
    }

    /**
     * @return string
     */
    public function restoreProfileCode()
    {
        return $this->restoreProfileCode;
    }

    /**
     * @param string $restoreProfileCode
     */
    public function setRestoreProfileCode($restoreProfileCode)
    {
        $this->restoreProfileCode = $restoreProfileCode;
    }

    /**
     * @param Carbon $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return string
     */
    public function loginCode()
    {
        return $this->loginCode;
    }

    /**
     * @param string $loginCode
     */
    public function setLoginCode($loginCode = null)
    {
        if (empty($loginCode)) {
            $loginCode = Encoding::binToHex(openssl_random_pseudo_bytes(16));
        }

        if (empty($this->loginCode)) {
            $this->loginCode = $loginCode;
        }
    }

    /**
     * @return boolean
     */
    public function isUnsubscribed()
    {
        return $this->isUnsubscribed;
    }

    /**
     * @param boolean $isUnsubscribed
     */
    public function setIsUnsubscribed($isUnsubscribed)
    {
        $this->isUnsubscribed = $isUnsubscribed;
    }

    /**
     * @return VoucherBatch[]|Collection
     */
    public function voucherBatches()
    {
        return $this->voucherBatches;
    }

    /**
     * @param VoucherBatch[]|Collection $voucherBatches
     */
    public function setVoucherBatches($voucherBatches)
    {
        $this->voucherBatches = $voucherBatches;
    }

    /**
     * @return boolean
     */
    public function isPlayedGame()
    {
        return $this->isPlayedGame;
    }

    /**
     * @param boolean $isPlayGame
     */
    public function setIsPlayedGame($isPlayedGame)
    {
        $this->isPlayedGame = $isPlayedGame;
    }
}