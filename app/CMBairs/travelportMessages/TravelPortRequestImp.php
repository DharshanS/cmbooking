<?php
/**
 * Created by PhpStorm.
 * User: dharshansithamparam
 * Date: 12/2/17
 * Time: 8:52 PM
 */

namespace App\CMBairs\travelportMessages;



use App\CMBairs\airBeans\AirSearch;
use Illuminate\Support\Facades\Log;
use League\Flysystem\Config;

class TravelPortRequestImp implements TravelPortRequest
{
    function __construct()
    {


    }



    public function getOneWaySearchRequest(AirSearch $airSearch)
    {

        $message='<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
       <soapenv:Header/>
       <soapenv:Body>
        <LowFareSearchReq xmlns="http://www.travelport.com/schema/air_v32_0" AuthorizedBy="User" TraceId="trace" TargetBranch="'.config('app.targetBranch').'" >
              <BillingPointOfSaleInfo xmlns="http://www.travelport.com/schema/common_v32_0" OriginApplication="UAPI" />
              <SearchAirLeg>
                <SearchOrigin>
                  <CityOrAirport xmlns="http://www.travelport.com/schema/common_v32_0" Code="'.$airSearch->departureCity[0].'"  />
                </SearchOrigin>
                <SearchDestination>
                  <CityOrAirport xmlns="http://www.travelport.com/schema/common_v32_0" Code="'.$airSearch->arrivalCity[0].'"  />
                </SearchDestination>
                <SearchDepTime PreferredTime="'.$airSearch->departureDate[0].'" />
                <AirLegModifiers>
                  <PreferredCabins>
                    <CabinClass Type="Economy"  xmlns="http://www.travelport.com/schema/common_v32_0"/>
                  </PreferredCabins>
                </AirLegModifiers>
              </SearchAirLeg>
              <AirSearchModifiers >
                <PreferredProviders>
                  <Provider xmlns="http://www.travelport.com/schema/common_v32_0" Code="'.config('app.provider').'" />
                </PreferredProviders>
              </AirSearchModifiers>';
        $passengersCount=1;
        for($count=0;$count<$airSearch->adult;$count++){
            $message .='<SearchPassenger BookingTravelerRef= "'.md5($passengersCount).'" xmlns="http://www.travelport.com/schema/common_v32_0" Code="'.config('cmb.passengersType.adult').'"/>';
            $passengersCount=$passengersCount+1;
        }
        for($count=0;$count<$airSearch->child;$count++){
            $message .='<SearchPassenger BookingTravelerRef= "'.md5($passengersCount).'" xmlns="http://www.travelport.com/schema/common_v32_0" Code="'.config('cmb.passengersType.child').'"/>';
            $passengersCount=$passengersCount+1;
        }
        for($count=0;$count<$airSearch->infant;$count++){
            $message .='<SearchPassenger BookingTravelerRef= "'.md5($passengersCount).'" xmlns="http://www.travelport.com/schema/common_v32_0" Code="'.config('cmb.passengersType.infant').'"/>';
            $passengersCount=$passengersCount+1;
        }

        $message.='<AirPricingModifiers FaresIndicator="PublicAndPrivateFares" ETicketability="Yes" />
       
    </LowFareSearchReq>
       </soapenv:Body>
    </soapenv:Envelope>' ;

   // Log::info('REQUEST----> :'.$message);
        return $message;
         }
}



