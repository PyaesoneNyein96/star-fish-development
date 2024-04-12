import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useSelector } from 'react-redux';
import { AnimatePresence } from "framer-motion"
import { usePage } from "@inertiajs/react"
import Sidebar from '@/Dashboard_Components/Sidebar';
import Student from './Student/Student';
import Reward from './Reward/Reward';
import Alert from '@/Dashboard_Components/Alert';
import Chat from './Chat/Chat';
import { useEffect } from 'react';

export default function Dashboard({ auth }) {
    const { sideOpen, selectItem } = useSelector((state) => state.sidebar);
    const { updateAlert } = useSelector((state) => state.componentSlice);
    const { user, rewards_name, rewards, students } = usePage().props;

    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Dashboard" />
            <main className='flex'>
                <AnimatePresence>
                    {sideOpen &&
                        <Sidebar />}
                </AnimatePresence>

                {/* {updateAlert && <Alert type={"edit"}></Alert>} */}

                <div className="pt-12  w-full">
                    <AnimatePresence>
                        {updateAlert && <Alert alertType="update" >User data updated!</Alert>}
                    </AnimatePresence>
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 m-5 overscroll-x-contain">
                        {selectItem === "Students" ? <Student students={students} /> :
                            selectItem === "Chats" ? <Chat /> :
                                selectItem === "Rewards" ? <Reward /> :
                                    selectItem === "Profile" ? <Reward /> :
                                        selectItem === "Setting" ? <Reward /> :
                                            (
                                                <div>Dashboard</div>
                                            )
                        }
                    </div>
                </div>
            </main>
        </AuthenticatedLayout >
    );
}
