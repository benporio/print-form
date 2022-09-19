<div class="header-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td style="vertical-align: bottom; width: 50%;">
                                <div>
                                    <table style="width: 65%; font-size: 1.4em;">
                                        <tr>
                                            <th style="background-color: darkblue; color: white; text-align: left;">
                                                <div>
                                                    <span>
                                                        CUSTOMER :
                                                    </span>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span>
                                                        [Company Name] <br>
                                                        [Contact Person | Department] <br>
                                                        [Street Address] <br>
                                                        [City, Country, ZIP] <br>
                                                        [VAT Registered TIN] <br>
                                                        [Phone Number] <br>
                                                        [Fax No.]
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                            <td style="text-align: right; width: 50%;">
                                <div>
                                    <table style="table-layout: auto; width: 70%; text-align: center; font-size: 1.1em;">
                                        <tr>
                                            <th style="border: 0.5px solid black; border-bottom: 0.5px solid white; background-color: darkblue; text-align: left;">
                                                <span style="color: white;">
                                                    Payment Terms
                                                </span>
                                            </th>
                                            <td style="border: 0.5px solid black; width: 50%;">
                                                <span>
                                                    <?= $formModel->header->paymentTerms ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="border: 0.5px solid black; border-top: 0.5px solid white; border-bottom: 0.5px solid white; background-color: darkblue; text-align: left;">
                                                <span style="color: white;">
                                                    Delivery Date
                                                </span>
                                            </th>
                                            <td style="border: 0.5px solid black; width: 50%;">
                                                <span>
                                                    <?= $formModel->header->deliveryDate ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="border: 0.5px solid black; border-top: 0.5px solid white; background-color: darkblue; text-align: left;">
                                                <span style="color: white;">
                                                    Due Date
                                                </span>
                                            </th>
                                            <td style="border: 0.5px solid black; width: 50%;">
                                                <span>
                                                    <?= $formModel->header->dueDate ?>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="margin-top: 20px;">
                <table style="width: 60%; font-size: 1.4em;">
                    <thead>
                        <tr>
                            <th style="border: 0.5px solid black; border-right: 0.5px solid white; background-color: darkblue; color: white;">
                                <span>
                                    Salesperson
                                </span>
                            </th>
                            <th style="border: 0.5px solid black; border-left: 0.5px solid white; border-right: 0.5px solid white; background-color: darkblue;  color: white;">
                                <span>
                                    Shipping Method
                                </span>
                            </th>
                            <th style="border: 0.5px solid black; border-left: 0.5px solid white; background-color: darkblue;  color: white;">
                                <span>
                                    Shipping Terms
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 0.5px solid black;">
                                <span>
                                    <?= $formModel->header->salesPerson ?>
                                </span>
                            </td>
                            <td style="border: 0.5px solid black;">
                                <span>
                                    <?= $formModel->header->shippingMethod ?>
                                </span>
                            </td>
                            <td style="border: 0.5px solid black;">
                                <span>
                                    <?= $formModel->header->shippingTerms ?>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>