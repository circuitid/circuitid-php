# circuitid

# Introduction
Circuit ID&reg; is an innovative cloud communications platform that redefines your connectivity experience. Our cutting-edge AI-powered solution seamlessly integrates calling, meetings, messaging, voicemail, fax, SIP Trunking, mobile broadband, and mobile phone services, accessible wherever you and your devices go.
                
Whether you are a beginner getting started with our API or an experienced developer looking for advanced features, this documentation site will serve as your comprehensive guide. 

We are excited to have you on board and are confident that this documentation site will empower you to leverage the full potential of our REST API.  If you have any questions or require further assistance, please don't hesitate to reach out to our support team.
                
Happy coding!

For more information, please visit [https://www.circuitid.com/](https://www.circuitid.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/circuitid/circuitid-php.git"
    }
  ],
  "require": {
    "circuitid/circuitid-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/circuitid/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AcceptedSendersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$acceptedsenders = new \OpenAPI\Client\CircuitID\Acceptedsenders(); // \OpenAPI\Client\CircuitID\Acceptedsenders | The JSON object that will be posted to the REST API endpoint.

try {
    $result = $apiInstance->createAcceptedSender($acceptedsenders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcceptedSendersApi->createAcceptedSender: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://cloud9.circuitid.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcceptedSendersApi* | [**createAcceptedSender**](docs/Api/AcceptedSendersApi.md#createacceptedsender) | **POST** /acceptedsenders | Create a new object
*AcceptedSendersApi* | [**findAcceptedSender**](docs/Api/AcceptedSendersApi.md#findacceptedsender) | **GET** /acceptedsenders | Find multiple objects
*AcceptedSendersApi* | [**getAcceptedSender**](docs/Api/AcceptedSendersApi.md#getacceptedsender) | **GET** /acceptedsenders/{id} | Get object by id
*AcceptedSendersApi* | [**patchAcceptedSender**](docs/Api/AcceptedSendersApi.md#patchacceptedsender) | **PATCH** /acceptedsenders/{id} | Patch object&#39;s data
*AcceptedSendersApi* | [**removeAcceptedSender**](docs/Api/AcceptedSendersApi.md#removeacceptedsender) | **DELETE** /acceptedsenders/{id} | Delete object by id
*AnnouncementsApi* | [**createAnnouncement**](docs/Api/AnnouncementsApi.md#createannouncement) | **POST** /announcements | Create a new object
*AnnouncementsApi* | [**findAnnouncement**](docs/Api/AnnouncementsApi.md#findannouncement) | **GET** /announcements | Find multiple objects
*AnnouncementsApi* | [**getAnnouncement**](docs/Api/AnnouncementsApi.md#getannouncement) | **GET** /announcements/{id} | Get object by id
*AnnouncementsApi* | [**patchAnnouncement**](docs/Api/AnnouncementsApi.md#patchannouncement) | **PATCH** /announcements/{id} | Patch object&#39;s data
*AnnouncementsApi* | [**removeAnnouncement**](docs/Api/AnnouncementsApi.md#removeannouncement) | **DELETE** /announcements/{id} | Delete object by id
*AppMarketplaceApi* | [**findAppMarketplace**](docs/Api/AppMarketplaceApi.md#findappmarketplace) | **GET** /appmarketplace | Find multiple objects
*AuthenticationApi* | [**createAuthentication**](docs/Api/AuthenticationApi.md#createauthentication) | **POST** /authentication | Create a new object
*CallQueueAgentsApi* | [**createCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#createcallqueueagent) | **POST** /callqueueagents | Create a new object
*CallQueueAgentsApi* | [**findCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#findcallqueueagent) | **GET** /callqueueagents | Find multiple objects
*CallQueueAgentsApi* | [**getCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#getcallqueueagent) | **GET** /callqueueagents/{id} | Get object by id
*CallQueueAgentsApi* | [**patchCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#patchcallqueueagent) | **PATCH** /callqueueagents/{id} | Patch object&#39;s data
*CallQueueAgentsApi* | [**removeCallQueueAgent**](docs/Api/CallQueueAgentsApi.md#removecallqueueagent) | **DELETE** /callqueueagents/{id} | Delete object by id
*CallQueuesApi* | [**createCallQueue**](docs/Api/CallQueuesApi.md#createcallqueue) | **POST** /callqueues | Create a new object
*CallQueuesApi* | [**findCallQueue**](docs/Api/CallQueuesApi.md#findcallqueue) | **GET** /callqueues | Find multiple objects
*CallQueuesApi* | [**getCallQueue**](docs/Api/CallQueuesApi.md#getcallqueue) | **GET** /callqueues/{id} | Get object by id
*CallQueuesApi* | [**patchCallQueue**](docs/Api/CallQueuesApi.md#patchcallqueue) | **PATCH** /callqueues/{id} | Patch object&#39;s data
*CallQueuesApi* | [**removeCallQueue**](docs/Api/CallQueuesApi.md#removecallqueue) | **DELETE** /callqueues/{id} | Delete object by id
*ChatRoomsApi* | [**createChatRoom**](docs/Api/ChatRoomsApi.md#createchatroom) | **POST** /chatrooms | Create a new object
*ChatRoomsApi* | [**findChatRoom**](docs/Api/ChatRoomsApi.md#findchatroom) | **GET** /chatrooms | Find multiple objects
*ChatRoomsApi* | [**getChatRoom**](docs/Api/ChatRoomsApi.md#getchatroom) | **GET** /chatrooms/{id} | Get object by id
*ChatRoomsApi* | [**patchChatRoom**](docs/Api/ChatRoomsApi.md#patchchatroom) | **PATCH** /chatrooms/{id} | Patch object&#39;s data
*ChatRoomsApi* | [**removeChatRoom**](docs/Api/ChatRoomsApi.md#removechatroom) | **DELETE** /chatrooms/{id} | Delete object by id
*ClientsApi* | [**createClient**](docs/Api/ClientsApi.md#createclient) | **POST** /clients | Create a new object
*ClientsApi* | [**findClient**](docs/Api/ClientsApi.md#findclient) | **GET** /clients | Find multiple objects
*ClientsApi* | [**getClient**](docs/Api/ClientsApi.md#getclient) | **GET** /clients/{id} | Get object by id
*ClientsApi* | [**patchClient**](docs/Api/ClientsApi.md#patchclient) | **PATCH** /clients/{id} | Patch object&#39;s data
*ClientsApi* | [**removeClient**](docs/Api/ClientsApi.md#removeclient) | **DELETE** /clients/{id} | Delete object by id
*ConferenceNumbersApi* | [**findConferenceNumber**](docs/Api/ConferenceNumbersApi.md#findconferencenumber) | **GET** /conferencenumbers | Find multiple objects
*ConferenceRoomsApi* | [**createConferenceRoom**](docs/Api/ConferenceRoomsApi.md#createconferenceroom) | **POST** /conferencerooms | Create a new object
*ConferenceRoomsApi* | [**findConferenceRoom**](docs/Api/ConferenceRoomsApi.md#findconferenceroom) | **GET** /conferencerooms | Find multiple objects
*ConferenceRoomsApi* | [**getConferenceRoom**](docs/Api/ConferenceRoomsApi.md#getconferenceroom) | **GET** /conferencerooms/{id} | Get object by id
*ConferenceRoomsApi* | [**patchConferenceRoom**](docs/Api/ConferenceRoomsApi.md#patchconferenceroom) | **PATCH** /conferencerooms/{id} | Patch object&#39;s data
*ConferenceRoomsApi* | [**removeConferenceRoom**](docs/Api/ConferenceRoomsApi.md#removeconferenceroom) | **DELETE** /conferencerooms/{id} | Delete object by id
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | Create a new object
*ContactsApi* | [**findContact**](docs/Api/ContactsApi.md#findcontact) | **GET** /contacts | Find multiple objects
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /contacts/{id} | Get object by id
*ContactsApi* | [**patchContact**](docs/Api/ContactsApi.md#patchcontact) | **PATCH** /contacts/{id} | Patch object&#39;s data
*ContactsApi* | [**removeContact**](docs/Api/ContactsApi.md#removecontact) | **DELETE** /contacts/{id} | Delete object by id
*ConversationMessagesApi* | [**createConversationMessage**](docs/Api/ConversationMessagesApi.md#createconversationmessage) | **POST** /conversationmessages | Create a new object
*ConversationMessagesApi* | [**findConversationMessage**](docs/Api/ConversationMessagesApi.md#findconversationmessage) | **GET** /conversationmessages | Find multiple objects
*ConversationMessagesApi* | [**getConversationMessage**](docs/Api/ConversationMessagesApi.md#getconversationmessage) | **GET** /conversationmessages/{id} | Get object by id
*ConversationMessagesApi* | [**patchConversationMessage**](docs/Api/ConversationMessagesApi.md#patchconversationmessage) | **PATCH** /conversationmessages/{id} | Patch object&#39;s data
*ConversationMessagesApi* | [**removeConversationMessage**](docs/Api/ConversationMessagesApi.md#removeconversationmessage) | **DELETE** /conversationmessages/{id} | Delete object by id
*ConversationsApi* | [**createConversation**](docs/Api/ConversationsApi.md#createconversation) | **POST** /conversations | Create a new object
*ConversationsApi* | [**findConversation**](docs/Api/ConversationsApi.md#findconversation) | **GET** /conversations | Find multiple objects
*ConversationsApi* | [**getConversation**](docs/Api/ConversationsApi.md#getconversation) | **GET** /conversations/{id} | Get object by id
*ConversationsApi* | [**patchConversation**](docs/Api/ConversationsApi.md#patchconversation) | **PATCH** /conversations/{id} | Patch object&#39;s data
*ConversationsApi* | [**removeConversation**](docs/Api/ConversationsApi.md#removeconversation) | **DELETE** /conversations/{id} | Delete object by id
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /customers | Create a new object
*CustomersApi* | [**findCustomer**](docs/Api/CustomersApi.md#findcustomer) | **GET** /customers | Find multiple objects
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /customers/{id} | Get object by id
*CustomersApi* | [**patchCustomer**](docs/Api/CustomersApi.md#patchcustomer) | **PATCH** /customers/{id} | Patch object&#39;s data
*CustomersApi* | [**removeCustomer**](docs/Api/CustomersApi.md#removecustomer) | **DELETE** /customers/{id} | Delete object by id
*DNSRecordsApi* | [**findDNSRecord**](docs/Api/DNSRecordsApi.md#finddnsrecord) | **GET** /dnsrecords | Find multiple objects
*DeveloperAppSubscriptionsApi* | [**createDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#createdeveloperappsubscription) | **POST** /developerappsubscriptions | Create a new object
*DeveloperAppSubscriptionsApi* | [**findDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#finddeveloperappsubscription) | **GET** /developerappsubscriptions | Find multiple objects
*DeveloperAppSubscriptionsApi* | [**getDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#getdeveloperappsubscription) | **GET** /developerappsubscriptions/{id} | Get object by id
*DeveloperAppSubscriptionsApi* | [**patchDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#patchdeveloperappsubscription) | **PATCH** /developerappsubscriptions/{id} | Patch object&#39;s data
*DeveloperAppSubscriptionsApi* | [**removeDeveloperAppSubscription**](docs/Api/DeveloperAppSubscriptionsApi.md#removedeveloperappsubscription) | **DELETE** /developerappsubscriptions/{id} | Delete object by id
*DeveloperAppsApi* | [**createDeveloperApp**](docs/Api/DeveloperAppsApi.md#createdeveloperapp) | **POST** /developerapps | Create a new object
*DeveloperAppsApi* | [**findDeveloperApp**](docs/Api/DeveloperAppsApi.md#finddeveloperapp) | **GET** /developerapps | Find multiple objects
*DeveloperAppsApi* | [**getDeveloperApp**](docs/Api/DeveloperAppsApi.md#getdeveloperapp) | **GET** /developerapps/{id} | Get object by id
*DeveloperAppsApi* | [**patchDeveloperApp**](docs/Api/DeveloperAppsApi.md#patchdeveloperapp) | **PATCH** /developerapps/{id} | Patch object&#39;s data
*DeveloperAppsApi* | [**removeDeveloperApp**](docs/Api/DeveloperAppsApi.md#removedeveloperapp) | **DELETE** /developerapps/{id} | Delete object by id
*DirectoriesApi* | [**createDirectorie**](docs/Api/DirectoriesApi.md#createdirectorie) | **POST** /directories | Create a new object
*DirectoriesApi* | [**findDirectorie**](docs/Api/DirectoriesApi.md#finddirectorie) | **GET** /directories | Find multiple objects
*DirectoriesApi* | [**getDirectorie**](docs/Api/DirectoriesApi.md#getdirectorie) | **GET** /directories/{id} | Get object by id
*DirectoriesApi* | [**patchDirectorie**](docs/Api/DirectoriesApi.md#patchdirectorie) | **PATCH** /directories/{id} | Patch object&#39;s data
*DirectoriesApi* | [**removeDirectorie**](docs/Api/DirectoriesApi.md#removedirectorie) | **DELETE** /directories/{id} | Delete object by id
*DomainsApi* | [**createDomain**](docs/Api/DomainsApi.md#createdomain) | **POST** /domains | Create a new object
*DomainsApi* | [**findDomain**](docs/Api/DomainsApi.md#finddomain) | **GET** /domains | Find multiple objects
*DomainsApi* | [**getDomain**](docs/Api/DomainsApi.md#getdomain) | **GET** /domains/{id} | Get object by id
*DomainsApi* | [**patchDomain**](docs/Api/DomainsApi.md#patchdomain) | **PATCH** /domains/{id} | Patch object&#39;s data
*DomainsApi* | [**removeDomain**](docs/Api/DomainsApi.md#removedomain) | **DELETE** /domains/{id} | Delete object by id
*FaxAccountsApi* | [**createFaxAccount**](docs/Api/FaxAccountsApi.md#createfaxaccount) | **POST** /faxaccounts | Create a new object
*FaxAccountsApi* | [**findFaxAccount**](docs/Api/FaxAccountsApi.md#findfaxaccount) | **GET** /faxaccounts | Find multiple objects
*FaxAccountsApi* | [**getFaxAccount**](docs/Api/FaxAccountsApi.md#getfaxaccount) | **GET** /faxaccounts/{id} | Get object by id
*FaxAccountsApi* | [**patchFaxAccount**](docs/Api/FaxAccountsApi.md#patchfaxaccount) | **PATCH** /faxaccounts/{id} | Patch object&#39;s data
*FaxAccountsApi* | [**removeFaxAccount**](docs/Api/FaxAccountsApi.md#removefaxaccount) | **DELETE** /faxaccounts/{id} | Delete object by id
*FaxesApi* | [**createFaxe**](docs/Api/FaxesApi.md#createfaxe) | **POST** /faxes | Create a new object
*FaxesApi* | [**findFaxe**](docs/Api/FaxesApi.md#findfaxe) | **GET** /faxes | Find multiple objects
*FaxesApi* | [**getFaxe**](docs/Api/FaxesApi.md#getfaxe) | **GET** /faxes/{id} | Get object by id
*FaxesApi* | [**removeFaxe**](docs/Api/FaxesApi.md#removefaxe) | **DELETE** /faxes/{id} | Delete object by id
*FindNumbersApi* | [**findFindNumber**](docs/Api/FindNumbersApi.md#findfindnumber) | **GET** /findnumbers | Find multiple objects
*FirewallApi* | [**createFirewall**](docs/Api/FirewallApi.md#createfirewall) | **POST** /firewall | Create a new object
*FirewallApi* | [**findFirewall**](docs/Api/FirewallApi.md#findfirewall) | **GET** /firewall | Find multiple objects
*FirewallApi* | [**getFirewall**](docs/Api/FirewallApi.md#getfirewall) | **GET** /firewall/{id} | Get object by id
*FirewallApi* | [**patchFirewall**](docs/Api/FirewallApi.md#patchfirewall) | **PATCH** /firewall/{id} | Patch object&#39;s data
*FirewallApi* | [**removeFirewall**](docs/Api/FirewallApi.md#removefirewall) | **DELETE** /firewall/{id} | Delete object by id
*GroupMembersApi* | [**createGroupMember**](docs/Api/GroupMembersApi.md#creategroupmember) | **POST** /groupmembers | Create a new object
*GroupMembersApi* | [**findGroupMember**](docs/Api/GroupMembersApi.md#findgroupmember) | **GET** /groupmembers | Find multiple objects
*GroupMembersApi* | [**getGroupMember**](docs/Api/GroupMembersApi.md#getgroupmember) | **GET** /groupmembers/{id} | Get object by id
*GroupMembersApi* | [**patchGroupMember**](docs/Api/GroupMembersApi.md#patchgroupmember) | **PATCH** /groupmembers/{id} | Patch object&#39;s data
*GroupMembersApi* | [**removeGroupMember**](docs/Api/GroupMembersApi.md#removegroupmember) | **DELETE** /groupmembers/{id} | Delete object by id
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /groups | Create a new object
*GroupsApi* | [**findGroup**](docs/Api/GroupsApi.md#findgroup) | **GET** /groups | Find multiple objects
*GroupsApi* | [**getGroup**](docs/Api/GroupsApi.md#getgroup) | **GET** /groups/{id} | Get object by id
*GroupsApi* | [**patchGroup**](docs/Api/GroupsApi.md#patchgroup) | **PATCH** /groups/{id} | Patch object&#39;s data
*GroupsApi* | [**removeGroup**](docs/Api/GroupsApi.md#removegroup) | **DELETE** /groups/{id} | Delete object by id
*HolidaysApi* | [**createHoliday**](docs/Api/HolidaysApi.md#createholiday) | **POST** /holidays | Create a new object
*HolidaysApi* | [**findHoliday**](docs/Api/HolidaysApi.md#findholiday) | **GET** /holidays | Find multiple objects
*HolidaysApi* | [**getHoliday**](docs/Api/HolidaysApi.md#getholiday) | **GET** /holidays/{id} | Get object by id
*HolidaysApi* | [**patchHoliday**](docs/Api/HolidaysApi.md#patchholiday) | **PATCH** /holidays/{id} | Patch object&#39;s data
*HolidaysApi* | [**removeHoliday**](docs/Api/HolidaysApi.md#removeholiday) | **DELETE** /holidays/{id} | Delete object by id
*InfoApi* | [**getInfo**](docs/Api/InfoApi.md#getinfo) | **GET** /info | Get object
*InvoiceItemsApi* | [**findInvoiceItem**](docs/Api/InvoiceItemsApi.md#findinvoiceitem) | **GET** /invoiceitems | Find multiple objects
*InvoiceItemsApi* | [**getInvoiceItem**](docs/Api/InvoiceItemsApi.md#getinvoiceitem) | **GET** /invoiceitems/{id} | Get object by id
*InvoicesApi* | [**findInvoice**](docs/Api/InvoicesApi.md#findinvoice) | **GET** /invoices | Find multiple objects
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /invoices/{id} | Get object by id
*LicensesApi* | [**createLicense**](docs/Api/LicensesApi.md#createlicense) | **POST** /licenses | Create a new object
*LicensesApi* | [**findLicense**](docs/Api/LicensesApi.md#findlicense) | **GET** /licenses | Find multiple objects
*LicensesApi* | [**getLicense**](docs/Api/LicensesApi.md#getlicense) | **GET** /licenses/{id} | Get object by id
*LicensesApi* | [**patchLicense**](docs/Api/LicensesApi.md#patchlicense) | **PATCH** /licenses/{id} | Patch object&#39;s data
*LicensesApi* | [**removeLicense**](docs/Api/LicensesApi.md#removelicense) | **DELETE** /licenses/{id} | Delete object by id
*MenuOptionsApi* | [**createMenuOption**](docs/Api/MenuOptionsApi.md#createmenuoption) | **POST** /menuoptions | Create a new object
*MenuOptionsApi* | [**findMenuOption**](docs/Api/MenuOptionsApi.md#findmenuoption) | **GET** /menuoptions | Find multiple objects
*MenuOptionsApi* | [**getMenuOption**](docs/Api/MenuOptionsApi.md#getmenuoption) | **GET** /menuoptions/{id} | Get object by id
*MenuOptionsApi* | [**patchMenuOption**](docs/Api/MenuOptionsApi.md#patchmenuoption) | **PATCH** /menuoptions/{id} | Patch object&#39;s data
*MenuOptionsApi* | [**removeMenuOption**](docs/Api/MenuOptionsApi.md#removemenuoption) | **DELETE** /menuoptions/{id} | Delete object by id
*MenusApi* | [**createMenu**](docs/Api/MenusApi.md#createmenu) | **POST** /menus | Create a new object
*MenusApi* | [**findMenu**](docs/Api/MenusApi.md#findmenu) | **GET** /menus | Find multiple objects
*MenusApi* | [**getMenu**](docs/Api/MenusApi.md#getmenu) | **GET** /menus/{id} | Get object by id
*MenusApi* | [**patchMenu**](docs/Api/MenusApi.md#patchmenu) | **PATCH** /menus/{id} | Patch object&#39;s data
*MenusApi* | [**removeMenu**](docs/Api/MenusApi.md#removemenu) | **DELETE** /menus/{id} | Delete object by id
*MessageBrandsApi* | [**createMessageBrand**](docs/Api/MessageBrandsApi.md#createmessagebrand) | **POST** /messagebrands | Create a new object
*MessageBrandsApi* | [**findMessageBrand**](docs/Api/MessageBrandsApi.md#findmessagebrand) | **GET** /messagebrands | Find multiple objects
*MessageBrandsApi* | [**getMessageBrand**](docs/Api/MessageBrandsApi.md#getmessagebrand) | **GET** /messagebrands/{id} | Get object by id
*MessageBrandsApi* | [**patchMessageBrand**](docs/Api/MessageBrandsApi.md#patchmessagebrand) | **PATCH** /messagebrands/{id} | Patch object&#39;s data
*MessageBrandsApi* | [**removeMessageBrand**](docs/Api/MessageBrandsApi.md#removemessagebrand) | **DELETE** /messagebrands/{id} | Delete object by id
*MessageCampaignsApi* | [**createMessageCampaign**](docs/Api/MessageCampaignsApi.md#createmessagecampaign) | **POST** /messagecampaigns | Create a new object
*MessageCampaignsApi* | [**findMessageCampaign**](docs/Api/MessageCampaignsApi.md#findmessagecampaign) | **GET** /messagecampaigns | Find multiple objects
*MessageCampaignsApi* | [**getMessageCampaign**](docs/Api/MessageCampaignsApi.md#getmessagecampaign) | **GET** /messagecampaigns/{id} | Get object by id
*MessageCampaignsApi* | [**patchMessageCampaign**](docs/Api/MessageCampaignsApi.md#patchmessagecampaign) | **PATCH** /messagecampaigns/{id} | Patch object&#39;s data
*MessageCampaignsApi* | [**removeMessageCampaign**](docs/Api/MessageCampaignsApi.md#removemessagecampaign) | **DELETE** /messagecampaigns/{id} | Delete object by id
*NumberPortsApi* | [**createNumberPort**](docs/Api/NumberPortsApi.md#createnumberport) | **POST** /numberports | Create a new object
*NumberPortsApi* | [**findNumberPort**](docs/Api/NumberPortsApi.md#findnumberport) | **GET** /numberports | Find multiple objects
*NumberPortsApi* | [**getNumberPort**](docs/Api/NumberPortsApi.md#getnumberport) | **GET** /numberports/{id} | Get object by id
*NumberPortsApi* | [**patchNumberPort**](docs/Api/NumberPortsApi.md#patchnumberport) | **PATCH** /numberports/{id} | Patch object&#39;s data
*NumbersApi* | [**findNumber**](docs/Api/NumbersApi.md#findnumber) | **GET** /numbers | Find multiple objects
*NumbersApi* | [**getNumber**](docs/Api/NumbersApi.md#getnumber) | **GET** /numbers/{id} | Get object by id
*NumbersApi* | [**patchNumber**](docs/Api/NumbersApi.md#patchnumber) | **PATCH** /numbers/{id} | Patch object&#39;s data
*OfficesApi* | [**createOffice**](docs/Api/OfficesApi.md#createoffice) | **POST** /offices | Create a new object
*OfficesApi* | [**findOffice**](docs/Api/OfficesApi.md#findoffice) | **GET** /offices | Find multiple objects
*OfficesApi* | [**getOffice**](docs/Api/OfficesApi.md#getoffice) | **GET** /offices/{id} | Get object by id
*OfficesApi* | [**patchOffice**](docs/Api/OfficesApi.md#patchoffice) | **PATCH** /offices/{id} | Patch object&#39;s data
*OfficesApi* | [**removeOffice**](docs/Api/OfficesApi.md#removeoffice) | **DELETE** /offices/{id} | Delete object by id
*PhoneInboundRuleActionsApi* | [**createPhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#createphoneinboundruleaction) | **POST** /phoneinboundruleactions | Create a new object
*PhoneInboundRuleActionsApi* | [**findPhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#findphoneinboundruleaction) | **GET** /phoneinboundruleactions | Find multiple objects
*PhoneInboundRuleActionsApi* | [**getPhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#getphoneinboundruleaction) | **GET** /phoneinboundruleactions/{id} | Get object by id
*PhoneInboundRuleActionsApi* | [**patchPhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#patchphoneinboundruleaction) | **PATCH** /phoneinboundruleactions/{id} | Patch object&#39;s data
*PhoneInboundRuleActionsApi* | [**removePhoneInboundRuleAction**](docs/Api/PhoneInboundRuleActionsApi.md#removephoneinboundruleaction) | **DELETE** /phoneinboundruleactions/{id} | Delete object by id
*PhoneInboundRulesApi* | [**createPhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#createphoneinboundrule) | **POST** /phoneinboundrules | Create a new object
*PhoneInboundRulesApi* | [**findPhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#findphoneinboundrule) | **GET** /phoneinboundrules | Find multiple objects
*PhoneInboundRulesApi* | [**getPhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#getphoneinboundrule) | **GET** /phoneinboundrules/{id} | Get object by id
*PhoneInboundRulesApi* | [**patchPhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#patchphoneinboundrule) | **PATCH** /phoneinboundrules/{id} | Patch object&#39;s data
*PhoneInboundRulesApi* | [**removePhoneInboundRule**](docs/Api/PhoneInboundRulesApi.md#removephoneinboundrule) | **DELETE** /phoneinboundrules/{id} | Delete object by id
*PhoneOutboundRuleActionsApi* | [**createPhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#createphoneoutboundruleaction) | **POST** /phoneoutboundruleactions | Create a new object
*PhoneOutboundRuleActionsApi* | [**findPhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#findphoneoutboundruleaction) | **GET** /phoneoutboundruleactions | Find multiple objects
*PhoneOutboundRuleActionsApi* | [**getPhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#getphoneoutboundruleaction) | **GET** /phoneoutboundruleactions/{id} | Get object by id
*PhoneOutboundRuleActionsApi* | [**patchPhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#patchphoneoutboundruleaction) | **PATCH** /phoneoutboundruleactions/{id} | Patch object&#39;s data
*PhoneOutboundRuleActionsApi* | [**removePhoneOutboundRuleAction**](docs/Api/PhoneOutboundRuleActionsApi.md#removephoneoutboundruleaction) | **DELETE** /phoneoutboundruleactions/{id} | Delete object by id
*PhoneOutboundRulesApi* | [**createPhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#createphoneoutboundrule) | **POST** /phoneoutboundrules | Create a new object
*PhoneOutboundRulesApi* | [**findPhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#findphoneoutboundrule) | **GET** /phoneoutboundrules | Find multiple objects
*PhoneOutboundRulesApi* | [**getPhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#getphoneoutboundrule) | **GET** /phoneoutboundrules/{id} | Get object by id
*PhoneOutboundRulesApi* | [**patchPhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#patchphoneoutboundrule) | **PATCH** /phoneoutboundrules/{id} | Patch object&#39;s data
*PhoneOutboundRulesApi* | [**removePhoneOutboundRule**](docs/Api/PhoneOutboundRulesApi.md#removephoneoutboundrule) | **DELETE** /phoneoutboundrules/{id} | Delete object by id
*RateCentersApi* | [**findRateCenter**](docs/Api/RateCentersApi.md#findratecenter) | **GET** /ratecenters | Find multiple objects
*RateCentersApi* | [**getRateCenter**](docs/Api/RateCentersApi.md#getratecenter) | **GET** /ratecenters/{id} | Get object by id
*ServersApi* | [**createServer**](docs/Api/ServersApi.md#createserver) | **POST** /servers | Create a new object
*ServersApi* | [**findServer**](docs/Api/ServersApi.md#findserver) | **GET** /servers | Find multiple objects
*ServersApi* | [**getServer**](docs/Api/ServersApi.md#getserver) | **GET** /servers/{id} | Get object by id
*ServersApi* | [**patchServer**](docs/Api/ServersApi.md#patchserver) | **PATCH** /servers/{id} | Patch object&#39;s data
*ServersApi* | [**removeServer**](docs/Api/ServersApi.md#removeserver) | **DELETE** /servers/{id} | Delete object by id
*TimeSchedulesApi* | [**createTimeSchedule**](docs/Api/TimeSchedulesApi.md#createtimeschedule) | **POST** /timeschedules | Create a new object
*TimeSchedulesApi* | [**findTimeSchedule**](docs/Api/TimeSchedulesApi.md#findtimeschedule) | **GET** /timeschedules | Find multiple objects
*TimeSchedulesApi* | [**getTimeSchedule**](docs/Api/TimeSchedulesApi.md#gettimeschedule) | **GET** /timeschedules/{id} | Get object by id
*TimeSchedulesApi* | [**patchTimeSchedule**](docs/Api/TimeSchedulesApi.md#patchtimeschedule) | **PATCH** /timeschedules/{id} | Patch object&#39;s data
*TimeSchedulesApi* | [**removeTimeSchedule**](docs/Api/TimeSchedulesApi.md#removetimeschedule) | **DELETE** /timeschedules/{id} | Delete object by id
*UserTokensApi* | [**createUserToken**](docs/Api/UserTokensApi.md#createusertoken) | **POST** /usertokens | Create a new object
*UserTokensApi* | [**findUserToken**](docs/Api/UserTokensApi.md#findusertoken) | **GET** /usertokens | Find multiple objects
*UserTokensApi* | [**getUserToken**](docs/Api/UserTokensApi.md#getusertoken) | **GET** /usertokens/{id} | Get object by id
*UserTokensApi* | [**patchUserToken**](docs/Api/UserTokensApi.md#patchusertoken) | **PATCH** /usertokens/{id} | Patch object&#39;s data
*UserTokensApi* | [**removeUserToken**](docs/Api/UserTokensApi.md#removeusertoken) | **DELETE** /usertokens/{id} | Delete object by id
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /users | Create a new object
*UsersApi* | [**findUser**](docs/Api/UsersApi.md#finduser) | **GET** /users | Find multiple objects
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{id} | Get object by id
*UsersApi* | [**patchUser**](docs/Api/UsersApi.md#patchuser) | **PATCH** /users/{id} | Patch object&#39;s data
*UsersApi* | [**removeUser**](docs/Api/UsersApi.md#removeuser) | **DELETE** /users/{id} | Delete object by id
*VirtualExtensionsApi* | [**createVirtualExtension**](docs/Api/VirtualExtensionsApi.md#createvirtualextension) | **POST** /virtualextensions | Create a new object
*VirtualExtensionsApi* | [**findVirtualExtension**](docs/Api/VirtualExtensionsApi.md#findvirtualextension) | **GET** /virtualextensions | Find multiple objects
*VirtualExtensionsApi* | [**getVirtualExtension**](docs/Api/VirtualExtensionsApi.md#getvirtualextension) | **GET** /virtualextensions/{id} | Get object by id
*VirtualExtensionsApi* | [**patchVirtualExtension**](docs/Api/VirtualExtensionsApi.md#patchvirtualextension) | **PATCH** /virtualextensions/{id} | Patch object&#39;s data
*VirtualExtensionsApi* | [**removeVirtualExtension**](docs/Api/VirtualExtensionsApi.md#removevirtualextension) | **DELETE** /virtualextensions/{id} | Delete object by id
*VoicemailApi* | [**findVoicemail**](docs/Api/VoicemailApi.md#findvoicemail) | **GET** /voicemail | Find multiple objects
*VoicemailApi* | [**getVoicemail**](docs/Api/VoicemailApi.md#getvoicemail) | **GET** /voicemail/{id} | Get object by id

## Models

- [Acceptedsenders](docs/Model/Acceptedsenders.md)
- [Announcements](docs/Model/Announcements.md)
- [Authentication](docs/Model/Authentication.md)
- [Callqueueagents](docs/Model/Callqueueagents.md)
- [Callqueues](docs/Model/Callqueues.md)
- [Chatrooms](docs/Model/Chatrooms.md)
- [Clients](docs/Model/Clients.md)
- [Conferencerooms](docs/Model/Conferencerooms.md)
- [Contacts](docs/Model/Contacts.md)
- [Conversationmessages](docs/Model/Conversationmessages.md)
- [Conversations](docs/Model/Conversations.md)
- [Customers](docs/Model/Customers.md)
- [Developerapps](docs/Model/Developerapps.md)
- [Developerappsubscriptions](docs/Model/Developerappsubscriptions.md)
- [Directories](docs/Model/Directories.md)
- [Domains](docs/Model/Domains.md)
- [Faxaccounts](docs/Model/Faxaccounts.md)
- [Faxes](docs/Model/Faxes.md)
- [Find](docs/Model/Find.md)
- [FindAcceptedSender200Response](docs/Model/FindAcceptedSender200Response.md)
- [FindAnnouncement200Response](docs/Model/FindAnnouncement200Response.md)
- [FindCallQueue200Response](docs/Model/FindCallQueue200Response.md)
- [FindCallQueueAgent200Response](docs/Model/FindCallQueueAgent200Response.md)
- [FindChatRoom200Response](docs/Model/FindChatRoom200Response.md)
- [FindClient200Response](docs/Model/FindClient200Response.md)
- [FindConferenceRoom200Response](docs/Model/FindConferenceRoom200Response.md)
- [FindContact200Response](docs/Model/FindContact200Response.md)
- [FindConversation200Response](docs/Model/FindConversation200Response.md)
- [FindConversationMessage200Response](docs/Model/FindConversationMessage200Response.md)
- [FindCustomer200Response](docs/Model/FindCustomer200Response.md)
- [FindDeveloperApp200Response](docs/Model/FindDeveloperApp200Response.md)
- [FindDeveloperAppSubscription200Response](docs/Model/FindDeveloperAppSubscription200Response.md)
- [FindDirectorie200Response](docs/Model/FindDirectorie200Response.md)
- [FindDomain200Response](docs/Model/FindDomain200Response.md)
- [FindFaxAccount200Response](docs/Model/FindFaxAccount200Response.md)
- [FindFaxe200Response](docs/Model/FindFaxe200Response.md)
- [FindFirewall200Response](docs/Model/FindFirewall200Response.md)
- [FindGroup200Response](docs/Model/FindGroup200Response.md)
- [FindGroupMember200Response](docs/Model/FindGroupMember200Response.md)
- [FindHoliday200Response](docs/Model/FindHoliday200Response.md)
- [FindInvoice200Response](docs/Model/FindInvoice200Response.md)
- [FindInvoiceItem200Response](docs/Model/FindInvoiceItem200Response.md)
- [FindLicense200Response](docs/Model/FindLicense200Response.md)
- [FindMenu200Response](docs/Model/FindMenu200Response.md)
- [FindMenuOption200Response](docs/Model/FindMenuOption200Response.md)
- [FindMessageBrand200Response](docs/Model/FindMessageBrand200Response.md)
- [FindMessageCampaign200Response](docs/Model/FindMessageCampaign200Response.md)
- [FindNumber200Response](docs/Model/FindNumber200Response.md)
- [FindNumberPort200Response](docs/Model/FindNumberPort200Response.md)
- [FindOffice200Response](docs/Model/FindOffice200Response.md)
- [FindPhoneInboundRule200Response](docs/Model/FindPhoneInboundRule200Response.md)
- [FindPhoneInboundRuleAction200Response](docs/Model/FindPhoneInboundRuleAction200Response.md)
- [FindPhoneOutboundRule200Response](docs/Model/FindPhoneOutboundRule200Response.md)
- [FindPhoneOutboundRuleAction200Response](docs/Model/FindPhoneOutboundRuleAction200Response.md)
- [FindRateCenter200Response](docs/Model/FindRateCenter200Response.md)
- [FindServer200Response](docs/Model/FindServer200Response.md)
- [FindTimeSchedule200Response](docs/Model/FindTimeSchedule200Response.md)
- [FindUser200Response](docs/Model/FindUser200Response.md)
- [FindUserToken200Response](docs/Model/FindUserToken200Response.md)
- [FindVirtualExtension200Response](docs/Model/FindVirtualExtension200Response.md)
- [Firewall](docs/Model/Firewall.md)
- [Groupmembers](docs/Model/Groupmembers.md)
- [Groups](docs/Model/Groups.md)
- [Holidays](docs/Model/Holidays.md)
- [Invoiceitems](docs/Model/Invoiceitems.md)
- [Invoices](docs/Model/Invoices.md)
- [Licenses](docs/Model/Licenses.md)
- [Menuoptions](docs/Model/Menuoptions.md)
- [Menus](docs/Model/Menus.md)
- [Messagebrands](docs/Model/Messagebrands.md)
- [Messagecampaigns](docs/Model/Messagecampaigns.md)
- [Numberports](docs/Model/Numberports.md)
- [Numbers](docs/Model/Numbers.md)
- [Offices](docs/Model/Offices.md)
- [Phoneinboundruleactions](docs/Model/Phoneinboundruleactions.md)
- [Phoneinboundrules](docs/Model/Phoneinboundrules.md)
- [Phoneoutboundruleactions](docs/Model/Phoneoutboundruleactions.md)
- [Phoneoutboundrules](docs/Model/Phoneoutboundrules.md)
- [Ratecenters](docs/Model/Ratecenters.md)
- [ResponseDate](docs/Model/ResponseDate.md)
- [ResponseError](docs/Model/ResponseError.md)
- [ResponseUsers](docs/Model/ResponseUsers.md)
- [Servers](docs/Model/Servers.md)
- [Timeschedules](docs/Model/Timeschedules.md)
- [Users](docs/Model/Users.md)
- [Usertokens](docs/Model/Usertokens.md)
- [Virtualextensions](docs/Model/Virtualextensions.md)

## Authorization

Authentication schemes defined for the API:
### jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```


