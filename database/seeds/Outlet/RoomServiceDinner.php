<?php

use Illuminate\Database\Seeder;

class RoomServiceDinner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ///// General Sales form
            [
                'question' => '	Room Service menu available and current?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 145,
            ],
            [
                'question' => 'Room Service menu clean and free marks, stains, soil or food debris?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 145,
            ],
            [
                'question' => 'Doorknob menu provided and current with delivery times highlighted?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 145,
            ],
            [
                'question' => 'Menu variety good, healthy dining choices available and highlighted?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 145,
            ],
            [
                'question' => 'Menu variety good, hotel/resort signature items available and highlighted?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 145,
            ],
            [
                'question' => 'Menu features at least one vegetarian main dish and one vegetarian appetizer?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 145,
            ],
            [
                'question' => 'Kids menu available, interesting items available?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 145,
            ],
            ///// Telephone Sales form
            [
                'question' => 'Telephone answered in 3 rings or less?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 146,
            ],
            [
                'question' => 'Initial greeting is clear and audible, GSR speaks slowly and clearly, easily understood?',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 146,
            ],
            [
                'question' => 'GSR identifies the department reached?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 146,
            ],
            [
                'question' => 'Guest asked to be put on hold, hold no longer than 30 seconds?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 146,
            ],
            [
                'question' => 'No significant background noises during the call.',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 146,
            ],
            [
                'question' => 'GSR speaks clearly identifying himself/herself?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 146,
            ],
            [
                'question' => 'GSR determines number of dining guests in room?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 146,
            ],
            [
                'question' => 'Without prompting, phone attendant describes the specials, soups of the day, or fish of day type items to the consultant?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 146,
            ],
            [
                'question' => 'When questioned, attendant is knowledgeable of the menu, preparation techniques and ingredients?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 146,
            ],
            [
                'question' => 'When asked for assistance, phone attendant suggests minimum of two entrees, one appetizer and one dessert?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 146,
            ],
            [
                'question' => "As the order is given, attendant asks appropriate questions to ensure that the guest's complete needs and desires are met, including accompaniments to the meal?",
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 146,
            ],
            [
                'question' => "Phone attendant attempts to suggest something not already ordered to increase the check?",
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 146,
            ],
            [
                'question' => "Order is verified by being repeated back to guest?",
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 146,
            ],
            [
                'question' => "GSR verifies the guestroom number?",
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 146,
            ],
            [
                'question' => "Current time quoted?",
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 146,
            ],
            [
                'question' => "Estimated delivery time quoted?",
                'possible_point' => 3,
                'question_no' => 16,
                'category_id' => 146,
            ],
            [
                'question' => "Guest asked if additional services are needed to make their stay more enjoyable?",
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 146,
            ],
            ///// In-Room Service form
            [
                'question' => 'Order delivered within 5 minutes (plus or minus) of the quoted delivery time, not earlier or later?',
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 147,
            ],
            [
                'question' => 'Delivery does not exceed 45 minutes.',
                'possible_point' => 2,
                'question_no' => 2,
                'category_id' => 147,
            ],
            [
                'question' => 'Waiter knocks 3 times or rings bell before announcing room service, repeating as necessary until a response is given?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 147,
            ],
            [
                'question' => 'Server is wearing a nametag that is entirely visible?',
                'possible_point' => 2,
                'question_no' => 4,
                'category_id' => 147,
            ],
            [
                'question' => 'Server is neatly groomed?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 147,
            ],
            [
                'question' => 'Server uniform is clean and in good condition?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 147,
            ],
            [
                'question' => 'Server asks permission to enter the guest room?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 147,
            ],
            [
                'question' => 'Table linen service provided as part of the meal experience at dinner?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 147,
            ],
            [
                'question' => 'Server asks where to position the food and beverage service?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 147,
            ],
            [
                'question' => 'Server positions chairs and tables, fully extends table leafs (if applicable) or tabletop/tray is conveniently placed so that meal may begin at guest leisure?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 147,
            ],
            [
                'question' => 'Attendant insures proper placement of plates and eating utensils for comfortable restaurant like dining experience, not just food delivery?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 147,
            ],
            [
                'question' => 'No plastic wrappings remain on food side plates or beverages?',
                'possible_point' => 3,
                'question_no' => 12,
                'category_id' => 147,
            ],
            [
                'question' => 'Liquid beverages have covers?',
                'possible_point' => 2,
                'question_no' => 13,
                'category_id' => 147,
            ],
            [
                'question' => 'Server identifies all items for accuracy?',
                'possible_point' => 3,
                'question_no' => 14,
                'category_id' => 147,
            ],
            [
                'question' => 'All items ordered as described on the menu and served, settings complete?',
                'possible_point' => 3,
                'question_no' => 15,
                'category_id' => 147,
            ],
            [
                'question' => 'Any and all special requests adhered to?',
                'possible_point' => 3,
                'question_no' => 16,
                'category_id' => 147,
            ],
            [
                'question' => 'Did all necessary serving utensils, flatware and linens accompany the order?',
                'possible_point' => 1,
                'question_no' => 17,
                'category_id' => 147,
            ],
            [
                'question' => 'Server either automatically removes plate coverings and/or offers guest the option of removing plate coverings on food products?',
                'possible_point' => 3,
                'question_no' => 18,
                'category_id' => 147,
            ],
            [
                'question' => 'Water provided for all guests with the order?',
                'possible_point' => 3,
                'question_no' => 19,
                'category_id' => 147,
            ],
            [
                'question' => 'Room service attendant offers to pour any beverages ordered?',
                'possible_point' => 3,
                'question_no' => 20,
                'category_id' => 147,
            ],
            [
                'question' => '	Room service attendant removes tray to the side, removes warmer and previous used articles?',
                'possible_point' => 2,
                'question_no' => 21,
                'category_id' => 147,
            ],
            [
                'question' => 'Did room service attendant offer to schedule an appointment to return to remove soiled articles and tidy up the room?',
                'possible_point' => 2,
                'question_no' => 22,
                'category_id' => 147,
            ],
            [
                'question' => '	If dessert was ordered, especially ice cream, did room service attendant inform guest to call when they were ready for delivery of the dessert after the meal?',
                'possible_point' => 2,
                'question_no' => 23,
                'category_id' => 147,
            ],
            [
                'question' => 'Room service attendant offers additional services before departing the room?',
                'possible_point' => 2,
                'question_no' => 24,
                'category_id' => 147,
            ],
            [
                'question' => 'Server provides verbal and/or written instructions for tray removal/room clean up?',
                'possible_point' => 1,
                'question_no' => 25,
                'category_id' => 147,
            ],
            [
                'question' => 'Server presents check in folder with pen?',
                'possible_point' => 2,
                'question_no' => 26,
                'category_id' => 147,
            ],
            [
                'question' => 'Check is accurately itemized and totaled?',
                'possible_point' => 3,
                'question_no' => 27,
                'category_id' => 147,
            ],
            [
                'question' => 'Server correctly explains any service charges for the property?',
                'possible_point' => 2,
                'question_no' => 28,
                'category_id' => 147,
            ],
            [
                'question' => '	Server specifically thanks guest, leaves quietly closing guest room door behind him?',
                'possible_point' => 2,
                'question_no' => 29,
                'category_id' => 147,
            ],
            [
                'question' => 'Room service attendant utilizes guest name in departing salutation?',
                'possible_point' => 3,
                'question_no' => 30,
                'category_id' => 147,
            ],
            [
                'question' => 'When the call was made for dessert delivery, was coffee offered at this time?',
                'possible_point' => 3,
                'question_no' => 31,
                'category_id' => 147,
            ],
            [
                'question' => 'Dessert presentation and delivery made within 5 minutes time?',
                'possible_point' => 3,
                'question_no' => 32,
                'category_id' => 147,
            ],
            [
                'question' => 'In room servicing of dessert detailed inclusive of removing used articles?',
                'possible_point' => 3,
                'question_no' => 33,
                'category_id' => 147,
            ],
            [
                'question' => 'In room servicing of dessert detailed and if coffee was ordered attendant offers and then pours the first cup?',
                'possible_point' => 3,
                'question_no' => 34,
                'category_id' => 147,
            ],
            ///// Food form
            [
                'question' => '	Appropriate condiments accompany the meal?',
                'possible_point' => 2,
                'question_no' => 1,
                'category_id' => 148,
            ],
            [
                'question' => '	Condiments in neat, clean and full containers?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 148,
            ],
            [
                'question' => 'Condiments, other than salt and pepper are sealed in manufactured containers?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 148,
            ],
            [
                'question' => 'Butter served at proper temperature?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 148,
            ],
            [
                'question' => 'Bread and butter plates are incorporated into service if bread and rolls are served?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 148,
            ],
            [
                'question' => 'Hot beverages served hot, cold beverages served cold?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 148,
            ],
            [
                'question' => 'Food prepared attractively, plate presentations neat and appealing?',
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 148,
            ],
            [
                'question' => 'Foods are cooked to appropriate degree of doneness, crispness, color, etc.?',
                'possible_point' => 3,
                'question_no' => 8,
                'category_id' => 148,
            ],
            [
                'question' => 'Hot food still hot, cold food cold?',
                'possible_point' => 3,
                'question_no' => 9,
                'category_id' => 148,
            ],
            [
                'question' => 'Food offers good flavor?',
                'possible_point' => 3,
                'question_no' => 10,
                'category_id' => 148,
            ],
            [
                'question' => '	Food portions as expected?',
                'possible_point' => 3,
                'question_no' => 11,
                'category_id' => 148,
            ],
            ///// Service Articles form
            [
                'question' => 'Tray or table clean?',
                'possible_point' => 1,
                'question_no' => 1,
                'category_id' => 149,
            ],
            [
                'question' => 'Tray or table not worn or damaged?',
                'possible_point' => 1,
                'question_no' => 2,
                'category_id' => 149,
            ],
            [
                'question' => 'Plate covers clean?',
                'possible_point' => 1,
                'question_no' => 3,
                'category_id' => 149,
            ],
            [
                'question' => 'Table settings superior quality- similar to dining room?',
                'possible_point' => 1,
                'question_no' => 4,
                'category_id' => 149,
            ],
            [
                'question' => 'Plate covers not overly worn or damaged?',
                'possible_point' => 1,
                'question_no' => 5,
                'category_id' => 149,
            ],
            [
                'question' => 'Plates, platters and serving pieces clean?',
                'possible_point' => 1,
                'question_no' => 6,
                'category_id' => 149,
            ],
            [
                'question' => 'China, platters, plates not overly worn or damaged?',
                'possible_point' => 1,
                'question_no' => 7,
                'category_id' => 149,
            ],
            [
                'question' => 'Flatware provided clean, free of food residue, free of tarnish and staining?',
                'possible_point' => 1,
                'question_no' => 8,
                'category_id' => 149,
            ],
            [
                'question' => 'Flatware provided in good physical condition, free of denting, bending, wear or damage?',
                'possible_point' => 1,
                'question_no' => 9,
                'category_id' => 149,
            ],
            [
                'question' => 'Glassware provided appropriate to beverages served?',
                'possible_point' => 1,
                'question_no' => 10,
                'category_id' => 149,
            ],
            [
                'question' => 'Glassware provided clean, free of water spots, lipstick, food residue or soap film?',
                'possible_point' => 1,
                'question_no' => 11,
                'category_id' => 149,
            ],
            [
                'question' => 'Glassware not worn or damaged?',
                'possible_point' => 1,
                'question_no' => 12,
                'category_id' => 149,
            ],
            [
                'question' => 'Cloth napkins must be used',
                'possible_point' => 1,
                'question_no' => 13,
                'category_id' => 149,
            ],
            [
                'question' => 'Linens provided clean and well pressed?',
                'possible_point' => 1,
                'question_no' => 14,
                'category_id' => 149,
            ],
            [
                'question' => 'Linens color-consistent, not worn, damaged or stained?',
                'possible_point' => 1,
                'question_no' => 15,
                'category_id' => 149,
            ],
            [
                'question' => 'Any paper goods, if used, neat and tidy?',
                'possible_point' => 1,
                'question_no' => 16,
                'category_id' => 149,
            ],
            [
                'question' => 'Flowers or hotel signature touches provided with room service order?',
                'possible_point' => 2,
                'question_no' => 17,
                'category_id' => 149,
            ],
            ///// After Service form
            [
                'question' => "Any trays left in corridor by other guests removed by attendant as they depart the consultant's guest room?",
                'possible_point' => 3,
                'question_no' => 1,
                'category_id' => 150,
            ],
            [
                'question' => "Did room service call back within 30 minutes of order delivery (before 10 pm) to inquire as to satisfaction with the meal and service and to insure that everything was in order and to guest satisfaction?",
                'possible_point' => 3,
                'question_no' => 2,
                'category_id' => 150,
            ],
            [
                'question' => "During call back, did attendant utilize the guest name to personalize the service?",
                'possible_point' => 3,
                'question_no' => 3,
                'category_id' => 150,
            ],[
                'question' => "During the call back, were additional services offered at this time?",
                'possible_point' => 3,
                'question_no' => 4,
                'category_id' => 150,
            ],
            [
                'question' => "	Did room service inquire about guest preference of table/tray removal and room clean up?",
                'possible_point' => 3,
                'question_no' => 5,
                'category_id' => 150,
            ],
            [
                'question' => 'If room service is called by or speaks with guest, removal of table/tray contents occurs within a 20 minute window of guest request?',
                'possible_point' => 3,
                'question_no' => 6,
                'category_id' => 150,
            ],
            [
                'question' => "If guest opts to place room service trays/tables in corridors, tray/tables picked up and removed from corridor in under 1 hour from time tray/table is placed there?",
                'possible_point' => 3,
                'question_no' => 7,
                'category_id' => 150,
            ],


        ];
        foreach ($forms as $form) {
            \App\GenericForm::create([
                'question' => $form['question'],
                'possible_point' => $form['possible_point'],
                'question_no' => $form['question_no'],
                'category_id' => $form['category_id'],
            ]);
        }
    }
}
