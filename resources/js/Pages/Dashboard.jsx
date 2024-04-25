import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { useDispatch, useSelector } from 'react-redux';
import { AnimatePresence } from "framer-motion"
import { usePage } from "@inertiajs/react"
import Sidebar from '@/Dashboard_Components/Sidebar';
import Student from './Student/Student';
import Reward from './Reward/Reward';
import Alert from '@/Dashboard_Components/Alert';
import Chat from './Chat/Chat';
import { useEffect } from 'react';
import Delete from './Student/Dialogs/Delete';
import { setSelectItem } from '@/Dashboard_Components/Slices/sidebarSlice';
import { setUpdateAlert } from '@/Dashboard_Components/Slices/componentSlice';

export default function Dashboard({ auth }) {
    const { sideOpen, selectItem } = useSelector((state) => state.sidebar);
    const { updateAlert, toDelete: clickDelete } = useSelector((state) => state.componentSlice);
    const { rewards_name, rewards, students, alert } = usePage().props;
    const dispatch = useDispatch();

    useEffect(() => {
        if (alert) {
            dispatch(setSelectItem("Students"))
            dispatch(setUpdateAlert())
        }
    }, [])

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

                <div className="pt-12  w-full">
                    <AnimatePresence>
                        {updateAlert && <Alert alertType={"update"} >{"User data updated!"}</Alert>}
                    </AnimatePresence>
                    <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 m-5 overscroll-x-contain">
                        {
                            selectItem === "Students" ? <Student students={students} user={auth.user} /> :
                                selectItem === "Chats" ? <Chat /> :
                                    selectItem === "Rewards" ? <Reward rewards={rewards} /> :
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
